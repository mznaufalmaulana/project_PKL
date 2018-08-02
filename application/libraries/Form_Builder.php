<?php
    class Form_Builder {
        #code
        var $form_type = "horizontal";
        var $class_label = "";
        
        function __construct(){
            
        }
        
        function inputText($label, $name , $value="" , $grid_label = "col-sm-3", $arr_additional = array()){
            ///$grid_class = "";
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                               
                                );
            $arrayForm = array(
                               "name" => $name,
                               "id" => $name,
                               "value" => $value,
                               "class" => "form-control",
                               );
            
            if(!empty($arr_additional)){
               $arrayForm = array_merge($arrayForm , $arr_additional);
            }
            
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_input = form_input($arrayForm);
            
            if($this->form_type=="horizontal"){
                $frm_input = '<div class="col-sm-'.$grid_form.'">
                '.$frm_input.'
              </div>';
            }
            
            $ret_html = '<div class="form-group" id="cont-'.$name.'">
              '.$frm_label.'
              '.$frm_input.'
            </div>';
            return $ret_html;
        }
        
        function inputPassword($label, $name , $value="" , $grid_label = "col-sm-3", $arr_additional = array()){
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                                "id" => "lbl".$name
                                );
            $arrayForm = array(
                               "name" => $name,
                               "id" => $name,
                               "value" => $value,
                               "class" => "form-control",
                               );
            
            if(!empty($arr_additional)){
               $arrayForm = array_merge($arrayForm , $arr_additional);
            }
            
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_input = form_password($arrayForm);
            
            if($this->form_type=="horizontal"){
                $frm_input = '<div class="col-sm-'.$grid_form.'">
                '.$frm_input.'
              </div>';
            }
            
            $ret_html = '<div class="form-group">
              '.$frm_label.'
              '.$frm_input.'
            </div>';
            return $ret_html;
        }
        
        function inputTextArea($label, $name , $value="" , $grid_label = "col-sm-3", $arr_additional = array()){
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                                );
            $arrayForm = array(
                               "name" => $name,
                               "id" => $name,
                               "value" => $value,
                               "class" => "form-control",
							   "rows" => "4",
                               );
            
            if(!empty($arr_additional)){
               $arrayForm = array_merge($arrayForm , $arr_additional);
            }
            
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_input = form_textarea($arrayForm);
            
            if($this->form_type=="horizontal"){
                $frm_input = '<div class="col-sm-'.$grid_form.'">
                '.$frm_input.'
              </div>';
            }
            
            $ret_html = '<div class="form-group" id="cont-'.$name.'">
              '.$frm_label.'
              '.$frm_input.'
            </div>';
            return $ret_html;
        }
        
        function inputStatic($label , $name , $value="" , $grid_label = "col-sm-3"){
            //$grid_class = "";
            
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                                );
            
            if(!empty($arr_additional)){
                $arrayForm = array_merge($arrayForm , $arr_additional);
            }
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_input = '<p class="form-control-static">'.$value.'</p>';
            
            if($this->form_type=="horizontal"){
                $frm_input = '<div class="col-sm-'.$grid_form.'">
                '.$frm_input.'
              </div>';
            }
            
            $ret_html = '<div class="form-group">
              '.$frm_label.'
              '.$frm_input.'
            </div>';
            return $ret_html;
        }
        
        function inputDropdown($label, $name , $value="" , $arr_option = array(),$arr_additional = array() , $grid_label= "col-sm-3"){
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                                "id" => "lbl".$name
                                );
            
            $arrayForm = array(
                               "id" => $name,
                               "class" => "form-control",
                               );
            
            if(!empty($arr_additional)){
                $arrayForm = array_merge($arrayForm , $arr_additional);
                ////$arrayLabel = array_merge($arrayLabel , $arr_additional);
            }
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_dropdown = form_dropdown($name , $arr_option , $value,$arrayForm);
            
            if($this->form_type=="horizontal"){
                $frm_dropdown = '<div class="col-sm-'.$grid_form.'">
                '.$frm_dropdown.'
              </div>';
            }
            
            $ret_html = '<div class="form-group" id="cont-'.$name.'">
              '.$frm_label.'
              '.$frm_dropdown.'
            </div>';
            return $ret_html;
        }
        
        function inputRadioGroup($label, $name , $value="" , $arr_option = array(),$arr_additional = array() , $grid_label= "col-sm-3"){
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                                );
            
            
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_radio_group = "";
            $no = "";
            foreach($arr_option as $val => $option){
                $no++;
                $arrayForm = array(
                               "id" => $name.$no,
                               );
            
                if(!empty($arr_additional)){
                    $arrayForm = array_merge($arrayForm , $arr_additional);
                }
                $is_checked = $value==$val ? TRUE : FALSE;
                $frm_radio_group .="<div class='radio'>";
                $frm_radio_group .="<label>".form_radio($name , $val , $is_checked , $arrayForm).$option."</label>";
                $frm_radio_group .="</div>";
            }
            if($this->form_type=="horizontal"){
                $frm_radio_group = '<div class="col-sm-'.$grid_form.'">
                '.$frm_radio_group.'
              </div>';
            }
            
            $ret_html = '<div class="form-group">
              '.$frm_label.'
              '.$frm_radio_group.'
            </div>';
            return $ret_html;
        }
        
        function inputCheckboxGroup($label, $name , $value=array() , $arr_option = array(),$arr_additional = array() , $grid_label= "col-sm-3"){
            if($this->form_type!='horizontal'){
                $grid_class = "";
                $grid_label = "";
            }else{
                $grid_class = explode("-" , $grid_label);
                $grid_form = 12 - $grid_class[2];    
            }
            
            $arrayLabel = array(
                                "class"=> $grid_label ." control-label form-label",
                                );
            
            $arrayForm = array();
            if(!empty($arr_additional)){
                $arrayForm = array_merge($arrayForm , $arr_additional);
            }
            
            $frm_label = form_label($label , $name , $arrayLabel);
            $frm_radio_group = "";
            $no = "";
            foreach($arr_option as $val => $option){
                $no++;
                $is_checked = in_array($val,$value) ? TRUE : FALSE;
                $arrayForm['value'] = $val;
                $arrayForm['name'] = $name."[]";
                $arrayForm['id'] = $name.$no;
                $arrayForm['checked'] = $is_checked;
                
                $frm_radio_group .="<div class='checkbox'>";
                $frm_radio_group .="<label>".form_checkbox($arrayForm).$option."</label>";
                $frm_radio_group .="</div>";
            }
            if($this->form_type=="horizontal"){
                $frm_radio_group = '<div class="col-sm-'.$grid_form.'">
                '.$frm_radio_group.'
              </div>';
            }
            
            $ret_html = '<div class="form-group">
              '.$frm_label.'
              '.$frm_radio_group.'
            </div>';
            return $ret_html;
        }
        
        function inputHidden($name , $value=""){
            $arrayForm = array(
                               "id" => $name,
                               "name"=>$name,
                               "class" => "form-control",
                               "value" => $value,
                               );
            $frm_input = '<input type="hidden" name="'.$name.'" id="'.$name.'" value="'.$value.'">';
            $ret_html = $frm_input;
            return $ret_html;
        }

        function inputButton($name , $value="" , $size="", $type="default" , $eventOnClick=""){
            $arrayForm = array(
                               "id" => $name,
                               "name"=>$name,
                               "class" => "btn btn-".$type." ".$size." ",
                               "content" => $value,
                               "onclick" => $eventOnClick
                               );
            if(!empty($arr_additional)){
                $arrayForm = array_merge($arrayForm , $arr_additional);
            }
            $frm_input = form_button($arrayForm);
            return $frm_input;
        }
    }
    
?>