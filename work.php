<?php

class work
{
    protected $lead;
    protected $jun;

    public function __construct()
    {
        $this->lead = mt_rand(0, 3);
        $this->jun = mt_rand(0, 1);
    }

    public function getMoodLead()
    {
        if ($this->lead == 0) {
            return 'The state "do not fall for eyes"!';
        } elseif ($this->lead == 1) {
            return 'Bad mood';
        } elseif ($this->lead == 2) {
            return 'Normal mood';
        } else {
            return 'Good mood :)';
        }
    }

    public function getWorkJun()
    {
        if ($this->jun == 0) {
            return 'Good work!';
        } else {
            return 'Bad work!';
        }
    }

    public function getLeadState()
    {
        if ($this->getMoodLead() == 'The state "do not fall for eyes"!' && $this->getWorkJun() == 'Good work!') {
            return 'Bad state!';
        }
    }
}

$mood = new work();
print_r($mood->getLeadState());
