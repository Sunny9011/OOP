<?php
class work
{
    protected $lead;
    protected $jun;
    protected $state = [['stateName' => 'he state "do not fall for eyes', 'pharse' => 'some phare'], 'Bad mood', 'Normal mood', 'Good mood'];
    public function __construct()
    {
        $this->lead = mt_rand(0, 3);
        $this->jun = mt_rand(0, 1);
    }
    public function getMoodLead()
    {
        return  ($this->lead + $this->getWorkJun() < count($this->state))? $this->lead + $this->getWorkJun() : count($this->state) - 1;
    }

    public function getWorkJun()
    {
        if ($this->jun == 0) {
            return -1;
        } else {
            return 1;
        }
    }
    public function getLeadState()
    {
        $stateId = $this->getMoodLead();

        return $this->state[$stateId];
    }
}
$test = new work();
print_r($test->getLeadState());