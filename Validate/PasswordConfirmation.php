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
    const NOT_MATCH2 = 'notMatc222222222';

		
    protected $_messageTemplates = array(
        self::NOT_MATCH => 'Los passwords no coinciden'
    );

    public function isValid($value, $context = null)
    {
        $value = (string) $value;
        $this->_setValue($value);

        if (is_array($context)) {
            if (isset($context['pwd'])
                && ($value == $context['pwd'])) {
                return false;
            }
        } elseif (is_string($context) && ($value == $context)) {
            return true;
        }


    }

	//probando update en ZEND
}