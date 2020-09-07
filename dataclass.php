<?php
class RestaurantMenu {
    private $xxmenuList;
    function __construct(array $xxmenuList) 
    {
        if (sizeof($xxmenuList)>0) 
        {
            $this->xxmenuList = $xxmenuList;
        } 
        else 
        {
            throw new Exception("There is No such available");
        }
    }
    public function menu_name() {
        $menuNameList = [];

        foreach($this->xxmenuList as $restaurant1) {
            $restaurantNameList[] = array(
                "name"=>$restaurant1['name']
            );
        }

        return json_encode($restaurantNameList);
    }
    public function menu_details($name)
    {
        $data_resp=["Invalid choice"];
        if($name){
            foreach($this->xxmenuList as $restaurant1)
            {
                
                if($restaurant1['name'] == $name)
                {
                    
                        $data_resp=$restaurant1;
                        break;
                }
            }
        }
        return json_encode($data_resp);
    }    
}
?>