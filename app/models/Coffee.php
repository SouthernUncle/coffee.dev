<?php

class Coffee extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'coffees';

	/**
	 * Relationships
	 *
	 */
	public function reviews()
	{
		return $this->hasMany('Review');
	}

	public function roaster()
	{
		return $this->belongsTo('Roaster');
	}

	public function region()
	{
		return $this->belongsTo('Region');
	}

	public function user()
	{
		return $this->belongsTo('User'); 
	}

	public function getAverageScore()
	{
		return array_sum($this->getScores())/count($this->getScores());
	}

	public function getScores()
	{
		$scores = [];

		foreach($this->reviews as $r) {
			$scores[] = round($r->weightedScore(), 2);
		}

		return $scores;
	}

	public function stDev()
	{
		$mean = $this->getAverageScore();

		$each = [];
		foreach($this->getScores() as $a) {
			$each[] = pow($a - $mean, 2);
		}

		$v_sum = array_sum($each);

		$variance = $v_sum / $this->reviews->count();

		return $st_dev = sqrt($variance);
	}

	public function overallCoffeeRating() {
		if ($this->reviews->count() > 0) {
			$stDev = round($this->stDev(),2);

			foreach($this->getScores() as $score) {
				$newScores[] = $this->isScoreOutOfRange($score);
			}
			
			return $mean = round(array_sum($newScores)/count($newScores),2);
		} else {
			return 0;
		}
	}

	public function isScoreOutOfRange ($score) {
		// Calculates if an individual review is out of 
		// range by 2.5 standard deviations from the mean
		// and if so, replaces it with their score pulled
		// 2.5 standard deviations back towards the center
		$multiple = 2.5 * $this->stDev();
		$lessThan = $this->getAverageScore() - $multiple;
		$greaterThan = $this->getAverageScore() + $multiple;

		if ($score < $lessThan) {
			$score  = $score + $multiple;
		}

		if ($score > $greaterThan) {
			$score  = $score - $multiple;
		}

		return $score;
	}

	public static function convertDate($string)
	{
		$date = date_create($string);
		$date = date_format($date, 'n-j-Y');

		return $date;
	}

	public static $rules = array(
		'region' 		=> 'required',
		'roaster' 		=> 'required',
		'name' 			=> 'required',
		'description' 	=> 'required',
	);

}
