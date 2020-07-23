<?php 
if (!function_exists('validate_training_cnt')) {
    /**
     * this function used to validate the center expairy date 
     * it uses the center approved date and add one yesr to it
     * @param date approved date 
     * 
     *
     * @return date expairy date
     *
     * */
 
    function check_date($approve_date){
        
        $str_to_time = strtotime($approve_date); // convert string to time 
        $last_date = strtotime("next year",$str_to_time); // add one year to date
        return date("Y-m-d",$last_date); //return the expair date
    }

    /**
     * this function check if  tarining or exam center is valid or not 
     * the center after one year from certified date will be expaired
     * it uses center expairy date as param 
     * if the center expairy date > current date return the center list 
     * @param expairy_date 
     * 
     * 
     * @return data return  all rows that expairy data greater than current date
     * 
     */

     function validate_cnt($cnt_type , $expiry_date){
        $current_date = date('Y-m-d');
        $data = DB::table('basic_datas')->where($cnt_type,'1')->where($expiry_date ,'>', $current_date)->orderBy('created_at','desc')->get();
        return $data;
     }

     /**
      * this function retrieve the exapired training & exam centers 
      * it uses center type and expairy date of center  as param
      * and return the list of expaired  training as well as exam centers
      *@param center_type
      *@param expair_date
      *
      *@return data return all expaired training and exam  centers
      */
      function expaired_cnt($center_type ,$expiry_date){
        $current_date = date('Y-m-d');
        return  DB::table('basic_datas')->where($center_type,'1')->where($expiry_date ,'<', $current_date)->orderBy('created_at','desc')->get();

      }

      /**
      * this function count approved training & exam centers 
      * it uses center type and expairy date of center  as param
      * and return the count of the approved training and exam center
      *@param center_type
      *@param expair_date
      *
      *@return number 
      */
      function certifiedCntCount($cnt_type , $expiry_date){
        $current_date = date('Y-m-d');
        return  DB::table('basic_datas')->where($cnt_type,'1')->where($expiry_date ,'>', $current_date)->count();
     }

     /**
      * this function count pending centers 
      * and return the count of pending_cnt where pending_cnt = 1
      *@return number 
      */
      function pendingCount(){
        return  DB::table('basic_datas')->where('pending_cnt','1')->count();
     }

      /**
      * this function count the exapired training & exam centers 
      *@return number 
      */
      function expairedCount(){
        $current_date = date('Y-m-d');
          $tr = DB::table('basic_datas')->where('training_expair_date' ,'<', $current_date)->where('training_cnt','1')->count();
          return $tr;
      }


}



