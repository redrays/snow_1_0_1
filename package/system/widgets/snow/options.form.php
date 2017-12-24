<?php

class formWidgetSnowOptions extends cmsForm {
    public function init() {
        return array(
            array(
                'type' => 'fieldset',
                'title' => LANG_OPTIONS, 
                'childs' => array(         
                    new fieldCheckbox('options:edit_hide', array(
                        'title' => 'Скрывать при редактировании контента',
						'default' => false
                    )),
                )
            ),
        );
    }
}
