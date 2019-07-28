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

{
    protected $moodLead;

    public function __construct()
{
    $this->moodLead = mt_rand(0, 3);
}
    public function getMoodLead()
{
    return $this->moodLead;
}
}




index.php

  protected $teamLead;
	protected $listener;

      public function __construct(Teamlead $teamLead,)
    {
        $this->teamLead = $teamLead;
        $this->listener =  new Listener(['calss t100', 'class t101']);

    }


		public function execute()
{
    $mood = $this->teamlead->getMoodLead();

    $this->listener->sendMood($mood);
}







class Listener {

$listteners = [];

    public function __construct($t1000, $t1001 $listener)
    {
       $this->listteners = $listener;

    }


  public function sendMood($mood)
{
    foreach($this->listteners as $listener)
    {
        $listener->setMood($mood);
    }
}
}


