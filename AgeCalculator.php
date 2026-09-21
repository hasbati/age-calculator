<?php
class AgeCalculator {
    public static function calculate($birthDate) {
        $dob = new DateTime($birthDate);
        $now = new DateTime();
        $diff = $now->diff($dob);
        return [
            'years' => $diff->y,
            'months' => $diff->m,
            'days' => $diff->d
        ];
    }
}
