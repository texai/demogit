<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 */
class My_Validate_NoX extends Zend_Validate_Abstract
{
    const LAST_LETTER_IS_X = 'x_as_last_letter';
    const LAST_LETTER_IS_Z = 'z_as_last_letter';

    protected $_messageTemplates = array(
        self::LAST_LETTER_IS_X => 'El último caracter no puede ser X',
        self::LAST_LETTER_IS_Z => 'El último caracter no puede ser zeta'
    );

    public function isValid($value, $context = null)
    {
        $value = (string) $value;
        $this->_setValue($value);

        if( strtoupper(substr($value,-1)) != 'X' && strtoupper(substr($value,-1)) != 'Z' ){
            return true;
        }else if(strtoupper(substr($value,-1)) != 'X'){
            $this->_error(self::LAST_LETTER_IS_X);
            return false;
        }else if(strtoupper(substr($value,-1)) != 'Z'){
            $this->_error(self::LAST_LETTER_IS_Z);
            return false;
        }


    }

}