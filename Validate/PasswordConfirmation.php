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
<<<<<<< HEAD
<<<<<<< HEAD

		
=======
	
>>>>>>> ab46cd00861ad257057000d4a7b7fdae3dd18c9d
=======
    const CONST2 = '11';
    const CONST3 = '11';
	
	//Hola
	//Hola
	//Hola
>>>>>>> 543a02ae6d153171c33ec5d2614653e498bd8b39
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
// HEAD
// HEAD
// hernan huarcaya...

	
	
// 0f5cf3b6d58b66455e4d9f7343687c6d7e7900f5
//freddy 

<<<<<<< HEAD
	//probando update en ZEND
	
	
	
	
	//OMAR - ZEND aqaaa
=======
// ab46cd00861ad257057000d4a7b7fdae3dd18c9d
>>>>>>> 543a02ae6d153171c33ec5d2614653e498bd8b39
}