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
            return 'i\'m okey';
        } elseif ($this->getMoodLead() == 'Bad mood' && $this->getWorkJun() == 'Good work!') {
            return 'Nice';
        } elseif ($this->getMoodLead() == 'Normal mood' && $this->getWorkJun() == 'Good work!') {
            return 'Great!';
        } elseif ($this->getMoodLead() == 'Good mood :)' && $this->getWorkJun() == 'Good work!') {
            return 'Good boy';
        } elseif ($this->getMoodLead() == 'The state "do not fall for eyes"!' && $this->getWorkJun() == 'Bad work!') {
            return 'Run jun RUN!';
        } elseif ($this->getMoodLead() == 'Bad mood' && $this->getWorkJun() == 'Bad work!') {
            return 'Run jun';
        } elseif ($this->getMoodLead() == 'Normal mood' && $this->getWorkJun() == 'Bad work!') {
            return 'Bad fun';
        } elseif ($this->getMoodLead() == 'Good mood :)' && $this->getWorkJun() == 'Bad work!') {
            return 'oh jun';
        }
    }
}

$mood = new work();
print_r($mood->getLeadState());
