<?php

class FutureTime
{
    private string $month="";
    private string $day="";
    private string $year="";
    private string $hour="";
    private string $min="";
    private string $title="";

   /**
    * Getters And Settlers
    */

    /**
     * Get the value of month
     */ 
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set the value of month
     *
     * @return  self
     */ 
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get the value of day
     */ 
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set the value of day
     *
     * @return  self
     */ 
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of hour
     */ 
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set the value of hour
     *
     * @return  self
     */ 
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get the value of min
     */ 
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     *
     * @return  self
     */ 
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    
    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    

    /**
     * Constructeur
     */

    public function __construct(datetime $datetime,string $title )
    {       
       $this->day=$datetime->format('d');
       $this->month=$datetime->format('m');
       $this->year=$datetime->format('Y');
       $this->hour=$datetime->format('H');
       $this->min=$datetime->format('i');
       $this->title=$title;
    }

}


