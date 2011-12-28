<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasswordConfirmation
 *
 * @author eanaya
 */
class My_Validate_PasswordConfirmation extends Zend_Validate_Abstract
{
    const NOT_MATCH = 'notMatch';
	// Ernesto
    const NOT_MATCH2 = 'notMatc222222222';
    const CONST2 = '11';
    const CONST3 = '11';
	
	//Hola
	//Hola
	//Hola
    protected $_messageTemplates = array(
        self::NOT_MATCH => 'Los passwords no coinciden'
    );
	//IO
    public function isValid($value, $context = null)
    {
        $value = (string) $value;
        $this->_setValue($value);
	
	//Cambio de Mayra

        if (is_array($context)) {
            if (isset($context['pwd'])
                && ($value == $context['pwd'])) {
                return false;
            }
        } elseif (is_string($context) && ($value == $context)) {
            return true;
        }
	//HI

    }
	
	
//freddy 

}