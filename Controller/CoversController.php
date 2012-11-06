<?php
App::uses('AppController', 'Controller');


/**
 * Covers Controller
 *
 * @property Cover $Cover
 */
class CoversController extends AppController {
	
	public $paginate = array(
		'Review' => array(
        	'limit' => 10,
			'conditions'    => array('Review.published' => '1','Review.language_id' => '3'),
        	'order' => array(
            'Review.modified' => 'DESC'
			)
		)
    );

/** 
 * home method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function home() {
		$this->set('keyw',Setting::get('es_keyword'));
		$this->set('baseurl',Setting::get('es_baseUrl'));
		$this->set('title_for_layout',Setting::get('es_titleHome'));
		$this->set('description_for_layout',Setting::get('es_descriptionHome'));
		$this->set('keywords_for_layout',Setting::get('es_keywordsHome'));
		//
	}    
    
/**
 * index method
 *
 * @return void
 */
	public function index($category_url = NULL) {
		//**
		$this->set('keyw',Setting::get('es_keyword'));
		//**
		$this->Cover->recursive = 1;
		$this->loadModel('Review');
		$this->Review->bindModel(array('belongsTo' => array('Cover')));
		//**************************************
		if ($this->request->is('requested')) {
			if($this->passedArgs['typeQuery'] == 'lastedCovers') {
				$covers = $this->Review->find('all',array('order'=>'Review.modified DESC','limit'=>'10','conditions' => array('Cover.published' => 1,'Review.published' => 1,'Review.language_id' => '3')));
			}
			if($this->passedArgs['typeQuery'] == 'topCovers') {
				$covers = $this->Review->find('all',array('order'=>'Review.view DESC','limit'=>'10','conditions' => array('Review.view > 0','Cover.published' => 1,'Review.published' => 1,'Review.language_id' => '3')));
			}
			if($this->passedArgs['typeQuery'] == 'featuredCovers') {
				$covers = $this->Review->find('all',array('order'=>'Review.modified DESC','limit'=>'5','conditions' => array('Cover.published' => 1,'Review.published' => 1,'Review.feature' => 1,'Review.language_id' => '3')));
			}
			return $covers;
		} else {
			if(empty($category_url)) {
				$this->set('title_for_layout',Setting::get('es_titleList'));
				$this->set('description_for_layout',Setting::get('es_descriptionList'));
				$this->set('keywords_for_layout',Setting::get('es_keywordsList'));
				//*****************
				$this->set('covers', $this->paginate('Review'));
			} else {
				$this->loadModel('Categorygiven');
				$this->Categorygiven->recursive = 0;
				//*
				$arr_categorygiven = $this->Categorygiven->find('list',array('fields'=>array('Categorygiven.url','Categorygiven.categorytype_id'),'conditions'=>array('language_id'=>'3')));
				$arr_categorygiven_name = $this->Categorygiven->find('list',array('fields'=>array('Categorygiven.categorytype_id','Categorygiven.name'),'conditions'=>array('language_id'=>'3')));
				//*
				if(array_key_exists($category_url,$arr_categorygiven)) {
					$id = $arr_categorygiven[$category_url];
					
					$this->paginate = array(
        				'Cover' => array(
							'fields' => array(
								'Review.id',
								'Review.title',
								'Review.url',
								'Cover.image',
								'Review.description_default',
								'Review.description',
								'Review.keywords_default',
								'Review.keywords',
								'Review.feature',
								'Review.created',
								'Review.modified',
								'Review.published',
								'Review.status',
								'Review.view',
								'Review.cover_id',
								'Review.language_id',
								'CategorytypesCover.categorytype_id'
							),
       	     				'limit' => 10,
            				'order' => array('Review.modified' => 'desc'),
							'joins' => array(
								array(
        	   						'alias' => 'Review',
            						'table' => 'reviews',
            						'type' => 'LEFT',
            						'conditions' => array(
            							'Cover.id = Review.cover_id'
									)
								),
								array(
           							'alias' => 'CategorytypesCover',
            						'table' => 'categorytypes_covers',
            						'type' => 'LEFT',
            						'conditions' => array(
            							'Cover.id = CategorytypesCover.cover_id'
									)
								)
							)
						)
					);
					$this->set('title_for_layout',str_replace('%name_category%',$arr_categorygiven_name[$id],Setting::get('es_titleCategory')));
					$this->set('description_for_layout',str_replace('%name_category%',strtolower($arr_categorygiven_name[$id]),Setting::get('es_descriptionCategory')));
					$this->set('keywords_for_layout',str_replace('%name_category%',strtolower($arr_categorygiven_name[$id]),Setting::get('es_keywordsCategory')));
					$this->set('covers', $this->paginate('Cover',array('Categorytype_id' => $id,'Cover.published' => 1,'Review.published' => 1,'Review.language_id' => '3')));
				} else {
					$this->redirect(array('action'=>'home'));
				}
			}
			
		}
		//**************************************
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {
		$this->set('keyw',Setting::get('es_keyword'));
		$this->set('baseurl',Setting::get('es_baseUrl'));
		//
		$cover_url = $this->params['coverurl'];
		$this->loadModel('Review'); 
		//
		$arr_covers = $this->Review->find('list',array('fields'=>array('Review.url','Review.cover_id'),'conditions'=>array('Review.language_id'=>3)));
		$arr_covers_idReview = $this->Review->find('list',array('fields'=>array('Review.url','Review.id'),'conditions'=>array('Review.language_id'=>3)));
		
		//Debugger::dump($arr_covers);
		//
		if (array_key_exists($cover_url,$arr_covers)) {
			$id = $arr_covers[$cover_url];
			$id_review = $arr_covers_idReview[$cover_url];
			

			$this->Review->id = $id_review;
			$this->Review->updateAll(
				array('Review.view '=>'Review.view+1'),
				array('Review.id'=>$id_review)
			);			
			//$arr_cover_data = $this->Review->read(array('Review.title','Review.description_default','Review.description','Review.keywords_default','Review.keywords','Review.cover_id'), $id);
			$arr_cover_data = $this->Cover->read(null, $id);
			if (!$this->Review->exists()) {
				throw new NotFoundException(__('Invalid cover'));
			}
			//$this->Cover->read(array('Cover.image'), $arr_cover_data['Review']['cover_id']);
			$this->set('cover', $arr_cover_data);
			//
			$this->set('title_for_layout',str_replace('%name_cover%',$arr_cover_data['Review'][0]['title'],Setting::get('es_titleView')));
			
			if ($arr_cover_data['Review'][0]['description_default'] == 1) {
				$this->set('description_for_layout',str_replace('%name_cover%',$arr_cover_data['Review'][0]['title'],Setting::get('es_descriptionView')));
			} else {
				$this->set('description_for_layout',$arr_cover_data['Review'][0]['description']);
			}	
					
			if ($arr_cover_data['Review'][0]['keywords_default'] == 1) {
				$this->set('keywords_for_layout',str_replace('%name_cover%',$arr_cover_data['Review'][0]['title'],Setting::get('es_keywordsView')));
			} else {
				$this->set('keywords_for_layout',$arr_cover_data['Review'][0]['keywords']);
			}
			//			
		} else {
			$this->redirect(array('action'=>'home'));
		}
	}
	
/**
 * sitemap_xml method
 *
 * @return void
 */
	public $components = array('RequestHandler');
	//public $helpers = array('Text');
	public function sitemap_xml() {
		if ($this->RequestHandler->isXml() ) {
			$this->loadModel('Review');
			$this->Review->bindModel(array('belongsTo' => array('Cover')));
	        $covers = $this->Review->find('all',array('fields'=>array('Review.url'),'order'=>'Review.modified DESC','conditions'=>array('Review.language_id'=>3,'Review.published'=>1,'Cover.published'=>1)));
	        //
	        $this->loadModel('Categorygiven');
			$this->Categorygiven->recursive = 0;
			$this->Categorygiven->bindModel(array('belongsTo' => array('Categorytype')));	
			$categorytypes = $this->Categorygiven->find('all',array('fields'=>array('Categorygiven.url'),'conditions'=>array('Categorygiven.language_id'=>3)));
			return $this->set(compact('covers','categorytypes'));
	    }
	}
}

