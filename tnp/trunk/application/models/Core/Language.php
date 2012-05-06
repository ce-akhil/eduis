<?php
class Tnp_Model_Core_Language extends Tnp_Model_Generic
{
    protected $_language_id;
    protected $_language_name;
    protected $_mapper;
    /**
     * @return the $_language_id
     */
    public function getLanguage_id ($throw_exception = null)
    {
        $language_id = $this->_language_id;
        if (empty($language_id) and $throw_exception == true) {
            $message = '_language_id is not set';
            $code = Zend_Log::ERR;
            throw new Exception($message, $code);
        } else {
            return $language_id;
        }
    }
    /**
     * @return the $_language_name
     */
    public function getLanguage_name ($throw_exception = null)
    {
        $language_name = $this->_language_name;
        if (empty($language_name) and $throw_exception == true) {
            $message = '_language_name is not set';
            $code = Zend_Log::ERR;
            throw new Exception($message, $code);
        } else {
            return $language_name;
        }
    }
    /**
     * @param field_type $_language_id
     */
    public function setLanguage_id ($_language_id)
    {
        $this->_language_id = $_language_id;
    }
    /**
     * @param field_type $_language_name
     */
    public function setLanguage_name ($_language_name)
    {
        $this->_language_name = $_language_name;
    }
    /**
     * Sets Mapper
     * @param Tnp_Model_Mapper_Core_Language $mapper
     * @return Tnp_Model_Core_Language
     */
    public function setMapper ($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }
    /**
     * gets the mapper from the object class
     * @return Tnp_Model_Mapper_Core_Language
     */
    public function getMapper ()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new Tnp_Model_Mapper_Core_Language());
        }
        return $this->_mapper;
    }
}