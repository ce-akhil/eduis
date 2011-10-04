<?php
class Tnp_Model_Test_Employability
{
    protected $_member_id;
    protected $_u_regn_no;
    protected $_member_test_record = array();
    protected $_member_test_section_record = array();
    //
    protected $_test_name;
    protected $_date_of_conduct;
    protected $_employability_test_id;
    //
    protected $_test_section_name;
    protected $_test_section_id;
    //
    protected $_section_marks;
    protected $_section_percentile;
    protected $_section_score_id;
    //
    protected $_test_record_id;
    protected $_test_regn_no;
    protected $_test_total_score;
    protected $_test_percentile;
    //
    //
    protected $_mapper;
    protected function getMember_test_record ()
    {
        if (sizeof($this->_member_test_record) == 0) {
            $member_test_record = $this->getMapper()->fetchRecord($this);
            $this->setMember_test_record($member_test_record);
        }
        return $this->_member_test_record;
    }
    protected function setMember_test_record ($_member_test_record)
    {
        $this->_member_test_record = $_member_test_record;
    } //
    protected function getMember_test_section_record ()
    {
        if (sizeof($this->_member_test_section_record) == 0) {
            $member_test_section_record = $this->getMapper()->fetchSectionRecord(
            $this);
            $this->setMember_test_section_record($member_test_section_record);
        }
        return $this->_member_test_section_record;
    }
    protected function setMember_test_section_record (
    $_member_test_section_record)
    {
        $this->_member_test_section_record = $_member_test_section_record;
    }
    //
    public function getMember_id ()
    {
        return $this->_member_id;
    }
    public function setMember_id ($_member_id)
    {
        $this->_member_id = $_member_id;
    }
    public function getU_regn_no ()
    {
        return $this->_u_regn_no;
    }
    public function setU_regn_no ($_u_regn_no)
    {
        $this->_u_regn_no = $_u_regn_no;
    }
    public function getTest_name ()
    {
        $test_name = $this->_test_name;
        if (! isset($test_name)) {
            $this->findTestDetails();
        }
        return $this->_test_name;
    }
    public function setTest_name ($_test_name)
    {
        $this->_test_name = $_test_name;
    }
    public function getDate_of_conduct ()
    {
        $date_of_conduct = $this->_date_of_conduct;
        if (! isset($date_of_conduct)) {
            $this->findTestDetails();
        }
        return $this->_date_of_conduct;
    }
    public function setDate_of_conduct ($_date_of_conduct)
    {
        $this->_date_of_conduct = $_date_of_conduct;
    }
    public function getEmployability_test_id ()
    {
        $employability_test_id = $this->_employability_test_id;
        if (! isset($employability_test_id)) {
            $this->findTestId();
        }
        return $this->_employability_test_id;
    }
    public function setEmployability_test_id ($_employability_test_id)
    {
        $this->_employability_test_id = $_employability_test_id;
    }
    public function getTest_section_name ()
    {
        $test_section_name = $this->_test_section_name;
        if (! isset($test_section_name)) {
            $this->findTestSectionDetails();
        }
        return $this->_test_section_name;
    }
    public function setTest_section_name ($_test_section_name)
    {
        $this->_test_section_name = $_test_section_name;
    }
    public function getTest_section_id ()
    {
        $test_section_id = $this->_test_section_id;
        if (! isset($test_section_id)) {
            $this->findTestSectionID();
        }
        return $this->_test_section_id;
    }
    public function setTest_section_id ($_test_section_id)
    {
        $this->_test_section_id = $_test_section_id;
    }
    public function getSection_marks ()
    {
        return $this->_section_marks;
    }
    public function setSection_marks ($_section_marks)
    {
        $this->_section_marks = $_section_marks;
    }
    public function getSection_percentile ()
    {
        return $this->_section_percentile;
    }
    public function setSection_percentile ($_section_percentile)
    {
        $this->_section_percentile = $_section_percentile;
    }
    public function getSection_score_id ()
    {
        return $this->_section_score_id;
    }
    public function setSection_score_id ($_section_score_id)
    {
        $this->_section_score_id = $_section_score_id;
    }
    public function getTest_record_id ()
    {
        return $this->_test_record_id;
    }
    public function setTest_record_id ($_test_record_id)
    {
        $this->_test_record_id = $_test_record_id;
    }
    public function getTest_regn_no ()
    {
        return $this->_test_regn_no;
    }
    public function setTest_regn_no ($_test_regn_no)
    {
        $this->_test_regn_no = $_test_regn_no;
    }
    public function getTest_total_score ()
    {
        return $this->_test_total_score;
    }
    public function setTest_total_score ($_test_total_score)
    {
        $this->_test_total_score = $_test_total_score;
    }
    public function getTest_percentile ()
    {
        return $this->_test_percentile;
    }
    public function setTest_percentile ($_test_percentile)
    {
        $this->_test_percentile = $_test_percentile;
    }
    /**
     * 
     * @param Tnp_Model_Mapper_Test_Employability $mapper
     * @return Tnp_Model_Test_Employability
     */
    public function setMapper ($mapper)
    {
        $this->_mapper = $mapper;
        return $this;
    }
    /**
     * gets the mapper from the object class
     * @return Tnp_Model_Mapper_Test_Employability
     */
    public function getMapper ()
    {
        if (null === $this->_mapper) {
            $this->setMapper(new Tnp_Model_Mapper_Test_Employability());
        }
        return $this->_mapper;
    }
    public function __construct (array $options = null)
    {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }
    public function __set ($name, $value)
    {
        $method = 'set' . $name;
        if ('mapper' == $name || ! method_exists($this, $method)) {
            throw new Exception('Invalid property specified');
        }
        $this->$method($value);
    }
    /**
     * 
     * @throws Exception
     */
    public function __get ($name)
    {
        $method = 'get' . $name;
        if ('mapper' == $name || ! method_exists($this, $method)) {
            throw new Exception('Invalid property specified');
        }
    }
    /**
     * used to init an object
     * @param array $options
     */
    public function setOptions ($options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }
    protected function findTestId ()
    {
        $this->getMapper()->fetchTestId($this);
    }
    /**
     * 
     * mapper will set name and doconduct
     */
    protected function findTestDetails ()
    {
        $this->getMapper()->fetchTestDetails($this);
    }
    protected function findTestSectionID ()
    {
        $this->getMapper()->fetchTestSectionId($this);
    }
    /**
     * 
     * mapper will set required props
     */
    protected function findTestSectionDetails ()
    {
        $this->getMapper()->fetchTestSectionDetails($this);
    }
    /**
     * fetches the section record of a member.Sets sectionMarks and sectionPercentile of object
     * 
     * 
     */
    public function initSectionRecord ()
    {
        $test_section_record = $this->getMember_test_section_record();
        $section_id = $this->getTest_section_id();
        if (!array_key_exists($section_id, $test_section_record)) {
            $error = 'No Employability Test\'s Section record exists for ' .
             $this->getMember_id();
            throw new Exception($error);
        } else {
            $options = $test_section_record[$section_id];
            $this->setOptions($options);
        }
    }
    /**
     * fetches the test record of a member, viz totalScore and totalPercentile
     * 
     */
    public function getMemberTestRecord ()
    {
        $member_test_record = $this->getMember_test_record();
        $emp_test_id = $this->getEmployability_test_id();
        if (array_key_exists($emp_test_id, $member_test_record)) {
            $options = $member_test_record[$emp_test_id];
            $this->setOptions($options);
        } else {
            $error = 'No record exists for member ' . $this->getMember_id() .
             ' corresponding to test_id ' . $emp_test_id;
            throw new Exception($error);
        }
    }
    public function getMemberTestIds ()
    {
        $member_test_record = $this->getMember_test_record();
        $member_test_ids = array_keys($member_test_record);
        if (sizeof($member_test_ids) == 0) {
            $error = 'No Employability Test record exists for ' .
             $this->getMember_id();
            throw new Exception($error);
        } else {
            return $member_test_ids;
        }
    }
    public function getMemberTestSectionIds ()
    {
        $member_test_section_record = $this->getMember_test_section_record();
        $test_section_ids = array_keys($member_test_section_record);
        //Zend_Registry::get('logger')->debug($test_section_ids);
        if (sizeof($test_section_ids) == 0) {
            $error = 'No Employability Test\'s Section record exists for ' .
             $this->getMember_id();
            throw new Exception($error);
        } else {
            return $test_section_ids;
        }
    }
}