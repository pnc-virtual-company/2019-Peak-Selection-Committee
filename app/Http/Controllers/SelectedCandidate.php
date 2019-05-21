<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class SelectedCandidate extends Controller
{
    public function selected(){
        $candidate= Candidate::all();

        $grade = Candidate::orderBy('grade', 'asc')->where('select',"Yes")->pluck('grade');
        $current = null;
        $grade_labels = array();
        $grade_number = array();
        $num_A = 0;
        $num_A_plus = 0;
        $num_A_minus = 0;
        $num_B = 0;
        $num_B_plus = 0;
        $num_B_minus = 0;
        if(! empty ($grade)) {
            foreach ($grade as $item) {
                // return $item;
                if ($item == "A+") {
                    $num_A_plus++;
                }
                if ($item == "A") {
                    $num_A++;
                }
                if ($item == "A-") {
                    $num_A_minus++;
                }
                if ($item == "B+") {
                    $num_B_plus++;
                }
                if ($item == "B") {
                    $num_B++;
                }
                if ($item == "B-") {
                    $num_B_minus++;
                }
            }
            // return $num_A;

            if( $num_A_plus >= 0 ) {
                array_push( $grade_labels, "A+" );
                array_push( $grade_number, $num_A_plus );
            }
            if( $num_A >= 0 ) {
                array_push( $grade_labels, "A" );
                array_push( $grade_number, $num_A );
            }
            if( $num_A_minus >= 0 ) {
                array_push( $grade_labels, "A-" );
                array_push( $grade_number, $num_A_minus );
            }
            if( $num_B_plus >= 0 ) {
                array_push( $grade_labels, "B+" );
                array_push( $grade_number, $num_B_plus );
            }
            if( $num_B >= 0 ) {
                array_push( $grade_labels, "B" );
                array_push( $grade_number, $num_B );
            }
            if( $num_B_minus >= 0 ) {
                array_push( $grade_labels, "B-" );
                array_push( $grade_number, $num_B_minus );
            }

            $grade_candidates = array(
                'labels' => $grade_labels,
                'datas' => $grade_number,
            );
            // return $grade_candidates;
        }

        $age = Candidate::orderBy('age', 'asc')->where('select',"Yes")->pluck('age');
        // $current = null;
        $age_labels = array();
        $age_number = array();
        $num_18_to_20 = 0;
        $num_21_to_23 = 0;
        if(! empty ($age)) {
            foreach ($age as $item) {

                if( $item <= 20 && $item >= 18 ) {
                    $num_18_to_20++;
                }

                if ( $item <= 23 && $item >= 21 ) {
                    $num_21_to_23++;
                }

            }

            if ( $num_18_to_20 >= 0) {
                array_push( $age_labels, "18 - 20" );
                array_push( $age_number, $num_18_to_20 );
            }

            if ( $num_21_to_23 >= 0) {
                array_push( $age_labels, "21 - 23" );
                array_push( $age_number, $num_21_to_23 );
            }

            $age_candidates = array(
                'labels' => $age_labels,
                'datas' => $age_number,
            );
            // return $age_candidates;
        }

        $ngo_id = Candidate::orderBy('ngo_id', 'asc')->where('select',"Yes")->pluck('ngo_id');
        $current = null;
        $ngo_labels = array();
        $ngo_number = array();
        $number_no = 0;
        $number_yes = 0;
        // return $ngo_id;
        if(! empty ($ngo_id)) {
            foreach ($ngo_id as $item) {
                if( $item != "" ) {
                    $number_yes++;
                } else {
                    $number_no++;
                }
            }
            // return $number_yes;
            if( $number_yes >= 0) {
                array_push( $ngo_labels, "Yes" );
                array_push( $ngo_number, $number_yes );
            }
            if ( $number_no >= 0 ) {
                array_push( $ngo_labels, "No" );
                array_push( $ngo_number, $number_no );
            }

            $ngo_candidates = array(
                'labels' => $ngo_labels,
                'datas' => $ngo_number,
            );
            // return $ngo_candidates;
        }

        return view('pages.selectedCandidate',
                compact('candidate',
                        'grade_candidates',
                        'age_candidates',
                        'ngo_candidates'));
    }
}
