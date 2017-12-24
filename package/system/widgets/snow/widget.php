<?php
class widgetSnow extends cmsWidget {

    public function run(){
		$this->disableCache();

		$core = cmsCore::getInstance();
		if ($this->getOption('edit_hide') && $core->controller == 'content') { 
			$data = $core->request->getData();
			if (array_key_exists('ctype_name', $data)){ 
				$ctype_name = $data['ctype_name']; 
			}
			if (array_key_exists('slug', $data)){ 
				$slug = $data['slug']; 
			}
			if (isset($ctype_name) && !isset($slug)) { return false; }
		}	
		
		$this->setWrapper('wrapper_plain');
        return;
    }

}
