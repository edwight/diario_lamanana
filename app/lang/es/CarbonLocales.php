<?php

/**
- * Carbon diffForHumans multi-language.
- * Inspired in a code made by Meroje (https://gist.github.com/Meroje/7783731)
- * This code has been improved as in that original version was only showing
- * past date differences. Not it's able to show differences in past and future.
- * 
- * Use it this way:
- * 
- * $dt = CarbonLocale::now();
- * echo $dt->diffForHumans($dt->copy()->subMinutes(15));
- * 
- * It'll print: 'en 15 minutos' (for Spanish, feel free to translate your own).
- */

use Carbon\Carbon;
use Illuminate\Support\Facades\Lang;

class CarbonLocale extends Carbon {

    /**
     * Get the difference in a human readable format.
     *
     * When comparing a value in the past to default now:
     * 1 hour ago
     * 5 months ago
     *
     * When comparing a value in the future to default now:
     * 1 hour from now
     * 5 months from now
     *
     * When comparing a value in the past to another value:
     * 1 hour before
     * 5 months before
     *
     * When comparing a value in the future to another value:
     * 1 hour after
     * 5 months after
     *
     * @param  Carbon  $other
     *
     * @return string
     */
    public function diffForHumans(Carbon $other = null)
    {
        $isNow = $other === null;

        if ($isNow) {
            $other = static::now($this->tz);
        }

        $isFuture = $this->gt($other);

        $delta = $other->diffInSeconds($this);

        // 4 weeks per month, 365 days per year... good enough!!
        $divs = array(
            'second' => self::SECONDS_PER_MINUTE,
            'minute' => self::MINUTES_PER_HOUR,
            'hour'   => self::HOURS_PER_DAY,
            'day'    => self::DAYS_PER_WEEK,
            'week'   => 4,
            'month'  => self::MONTHS_PER_YEAR
        );

        $unit = 'year';

        foreach ($divs as $divUnit => $divValue) {
            if ($delta < $divValue) {
                $unit = $divUnit;
                break;
            }

            $delta = floor($delta / $divValue);
        }

        if ($delta == 0) {
            $delta = 1;
        }

        // Código adaptado para utilizar el gestor de idiomas de Laravel
        $txt = 'carbonlocale';

        if ($isFuture) {
            return Lang::choice("$txt.past.$unit", $delta, compact('delta'));
        }

        return Lang::choice("$txt.future.$unit", $delta, compact('delta'));
    }
} 