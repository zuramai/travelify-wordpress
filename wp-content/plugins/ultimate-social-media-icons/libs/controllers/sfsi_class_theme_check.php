<?php

class sfsi_ThemeCheck
{
	public function sfsi_plus_string_to_arr($str){

		$arrSingleQuote = array();

		if(strlen(trim($str))>0){
			$arrSingleQuote = explode(",", $str);
		}
		return $arrSingleQuote;
	}

	public function sfsi_plus_getdomain($url)
	{
		$pieces = parse_url($url);
		$domain = isset($pieces['host']) ? $pieces['host'] : '';
		if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
			return $regs['domain'];
		}
		return false;
	}

	public function sfsi_plus_returningElement($element) {return $element[0];}

	public function sfsi_plus_get_themeData(){
	    
	    $keywordFile    = SFSI_DOCROOT."/themedata.csv";
	    $keywordData    = @file_get_contents($keywordFile);
	    $keywordEnglish = array_map("str_getcsv", explode("\n", $keywordData));
	    $themeDataArr = array();

	    if(isset($keywordEnglish) && count($keywordEnglish)>0){

	    	unset($keywordEnglish[0]);

		    $finalArr = array_filter(array_values($keywordEnglish));

		    if(isset($finalArr) && count($finalArr)>0){
			    
			    for($i=0;$i<count($finalArr);$i++) {
			              
			            if(is_array($finalArr[$i])){

			                $arrVal = $finalArr[$i];

			                    $themeArr 					   = array();
			                    $themeArr['themeName']         = preg_replace('/^[,\s]+|[\s,]+$/', '', trim($arrVal[0]));
			                    $themeArr['noBrainerKeywords'] = $this->sfsi_plus_string_to_arr(preg_replace('/^[,\s]+|[\s,]+$/', '', trim($arrVal[1])));
			                    $themeArr['separateKeywords']  = $this->sfsi_plus_string_to_arr(preg_replace('/^[,\s]+|[\s,]+$/', '', trim($arrVal[2])));
			                    $themeArr['negativeKeywords']  = $this->sfsi_plus_string_to_arr(preg_replace('/^[,\s]+|[\s,]+$/', '', trim($arrVal[3])));
			                    $themeArr['headline']          = (isset($arrVal[4]) && strlen(trim($arrVal[4]))==0)? "You like ".trim($arrVal[0])." ?" : trim($arrVal[4]);
			                    $themeArr['themeLink']         = trim($arrVal[5]);
			                    $themeArr['bottomtext']        = (isset($arrVal[6]) && strlen(trim($arrVal[6]))==0)? "See all ".strtolower(trim($arrVal[0]))."-themed-icons": trim($arrVal[6]);                   

			                    array_push($themeDataArr, (object)$themeArr);
			            } 
			    }
		    }	    	
	    }

	    return $themeDataArr;
	}

	public function sfsi_plus_get_keywordEnglish(){
	    $keywordFile    = SFSI_DOCROOT."/All_english_words_better_list.csv";
	    $keywordData    = @file_get_contents($keywordFile);
	    $keywordEnglish = array_map("str_getcsv", explode("\n", $keywordData));
	    $keywordEnglish = array_map('array_filter', $keywordEnglish);
		$keywordEnglish = array_filter(array_map(sfsi_returningElement($element), $keywordEnglish)); 	    
	    return $keywordEnglish;
	}


	public function sfsi_plus_regex_for_keywords($arrKeyWords){

		$strRegex = "";

		if(isset($arrKeyWords) && count($arrKeyWords)>0 && is_array($arrKeyWords)){

			$count = count($arrKeyWords);

	        if($count==1){
	            $strRegex .= "/".$arrKeyWords[0]."/im";
	        }
	        else{
				for ($i=0; $i <$count ; $i++) { 

					$val = trim($arrKeyWords[$i]);

					if($i==0){
						$strRegex .= "/(".$val."|";
					}
					elseif ($i==$count-1) {
						$strRegex .= $val.")/im";				
					}
					else{
						$strRegex.= $val."|";
					}			
				}	        	
	        }
		}
		return $strRegex;
	}

	public function sfsi_plus_regex_forNegative_keywords($arrKeyWords){

	      $strRegex = "";

	      if(isset($arrKeyWords) && count($arrKeyWords)>0 && is_array($arrKeyWords)){

	            $count = count($arrKeyWords);

	            if($count==1){
	            	$strRegex .= "/".$arrKeyWords[0]."/i";
	            }
	            else{
	            	
		            for ($i=0; $i <$count ; $i++) { 

						  $val = trim($arrKeyWords[$i]);

		                  if($i==0){
		                        $strRegex .= "/".$val."|";
		                  }
		                  elseif ($i==$count-1) {
		                        $strRegex .= $val."/i";                       
		                  }
		                  else{
		                        $strRegex.= $val."|";
		                  }                 
		            }	            	
	            }
	      }
	      return $strRegex;
	}

	public function sfsi_plus_match_separate_word_with_csv_data($seprateWord,$domainname){


	      $keywordEnglish = $this->sfsi_plus_get_keywordEnglish();

	      $finalKeywordEnglish = array();

	      foreach ($keywordEnglish as $val) {
	        if(is_array($val)) {
	            array_push($finalKeywordEnglish, $val[0]);
	        }
	      }

	        $catflag = false;

	        $explode    = explode($seprateWord,$domainname);
	        $left       = trim($explode[0]);
	        $right      = trim($explode[1]);
	        
	        $leftcatflag = false;

	                if(!empty($left))
	                {
	                    $left = str_split($left);

	                    $matchKeyword = ''; $j = 0;
	                    for($i = (count($left)-1); $i >= 0; $i--)
	                    {
	                        $matchKeyword = $left[$i].$matchKeyword;
	                        
	                        if($j > 0)
	                        {
	                            if(in_array($matchKeyword, $finalKeywordEnglish))
	                            {
	                                $leftcatflag = true;
	                                break;
	                            }
	                            else
	                            {
	                                continue;
	                            }
	                        }
	                        else
	                        {
	                            if(preg_match("/\.|\-|[0-9]/im", $matchKeyword))
	                            {
	                                $leftcatflag = true;
	                                break;
	                            } 
	                        }

	                        $j++;
	                    }       
	                }

	                $rightcatflag = false;
	                if(!empty($right))
	                {
	                    $right = str_split($right);
	                    
	                    $matchKeyword = '';
	                    for($i = 0; $i < count($right); $i++)
	                    {
	                        $matchKeyword .= $right[$i];
	                        
	                        if($i > 0)
	                        {
	                            if(in_array($matchKeyword, $finalKeywordEnglish))
	                            {
	                                $rightcatflag = true;
	                                break;
	                            }
	                            else
	                            {
	                                continue;
	                            }
	                        }
	                        else
	                        {
	                            if(preg_match("/\.|\-|[0-9]/im", $matchKeyword))
	                            {
	                                $rightcatflag = true;
	                                break;
	                            } 
	                        }
	                    }       
	                }

	                if(empty($left) && empty($right))
	                {
	                    $catflag = true;
	                }
	                else
	                {
	                    if(!empty($left) && !empty($right))
	                    {
	                        if($rightcatflag && $leftcatflag)
	                        {
	                            $catflag = true;           
	                        }
	                    }
	                    elseif(empty($left) && !empty($right))
	                    {
	                        if($rightcatflag)
	                        {
	                            $catflag = true;           
	                        }
	                    }
	                    elseif(!empty($left) && empty($right))
	                    {
	                        if($leftcatflag)
	                        {
	                            $catflag = true;           
	                        }
	                    }
	                }

	    return $catflag;
	}

	public function sfsi_plus_SeparateKeywordCheck($arrSeparateKeywords,$domainname){

	    $boolSeparateWord = false;

	    if(isset($arrSeparateKeywords) && is_array($arrSeparateKeywords) && count($arrSeparateKeywords)>0){

	        foreach ($arrSeparateKeywords as $value) {

	            $val = trim($value);

	            if(isset($value) && strlen($val)>0){

	                if(preg_match("/(".$val.")/im", $domainname)){
	                    
	                    $boolSeparateWord = $this->sfsi_plus_match_separate_word_with_csv_data($val,$domainname);

	                    if($boolSeparateWord) {
	                    	break;	                    	
	                    }

	                }
	            }
	        }
	    }

	    return $boolSeparateWord;
	}


	public function sfsi_plus_noBrainerKeywordCheck($arrNoBrainerKeywords,$domainname){

	    $bflag = false;

	    if(isset($arrNoBrainerKeywords) && count($arrNoBrainerKeywords)>0 && is_array($arrNoBrainerKeywords)>0){
	    	
	    	if(preg_match($this->sfsi_plus_regex_for_keywords($arrNoBrainerKeywords), $domainname)){
	        	$bflag = true;
	    	}	    	
	    }
	    return $bflag;		
	}


	public function sfsi_plus_check_type_of_websiteWithNoBrainerAndSeparateAndNegativeKeywords($strCheckForThemeType,$arrNoBrainerKeywords,$arrSeparateKeywords,$arrNoBrainerAndSeparateKeywords,$arrNegativeKeywords,$domainname){

	    $flag = false;

		    if(is_array($arrNoBrainerAndSeparateKeywords) && isset($arrNoBrainerAndSeparateKeywords) && count($arrNoBrainerAndSeparateKeywords)>0){

		        if(preg_match($this->sfsi_plus_regex_for_keywords($arrNoBrainerAndSeparateKeywords), $domainname))
		        {
		            if(!empty($domainname))
		            {
		                if(is_array($arrNegativeKeywords) && isset($arrNegativeKeywords) && count($arrNegativeKeywords)){
		                    $domainname = preg_replace($this->sfsi_plus_regex_forNegative_keywords($arrNegativeKeywords), '', $domainname);              
		                    $explode    = explode(".", $domainname);
		                    $domainname = @$explode[0];                    
		                }
			            }
		               
		            if($this->sfsi_plus_noBrainerKeywordCheck($arrNoBrainerKeywords, $domainname)){
		                $flag = true;	                
		            }
		            else if($this->sfsi_plus_SeparateKeywordCheck($arrSeparateKeywords,$domainname)){
		                $flag = true;
		            }
		        }        
		    }
		    return ($flag)? $strCheckForThemeType:$flag;	    	
	}

 	public function sfsi_plus_bannereHtml($title, $siteLink, $bannerImage, $buttonTitle)
	{
		echo '<div class="sfsi_new_notification_cat">
	        <div class="sfsi_new_notification_header_cat">
	            <h1>'.$title.'</h1>
	            <h3>The <a href="'.$siteLink.'" target="_blank">Premium Plugin</a> Includes these icons...</h3>
	            <div class="sfsi_new_notification_cross_cat">X</div>
	        </div>
	        
	        <div class="sfsi_new_notification_body_link_cat">
	            <a href="'.$siteLink.'" target="_blank">
	                <div class="sfsi_new_notification_body_cat">
	                    <div class="sfsi_new_notification_image_cat">
	                        <img src="'.$bannerImage.'" id="newImg" />
	                    </div>
	                </div>
	            </a>
	            <div class="bottom_text">
	                <a href="'.$siteLink.'">
	                    '.$buttonTitle.' >
	                </a>
	            </div>    
	        </div>
	    </div>';
	}
		
}
?>