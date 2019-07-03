<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header_section.css">
    <link rel="stylesheet" href="css/content_section.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/animations.css">

    <title>~Upių Tėvas~</title>
</head>
<body>
    <div class="background_main">    
    </div>

    <Header class="header_area">

        <div id="header_area_background" class="header_area_background">
        </div>
        
        <div class="logo_upiu-tevas_1">
        </div>
        
        <div class="header_content">

            <div class="complete_search">
                <input id="complete_search_input_field" type="text">
                <div class="complete_search_magnify_icon">
                </div>
            </div>

            <div class="header_button_style news_opening_button" id="">
                Naujienos
            </div>

            <div class="about_us_opening_button header_button_style" id="">
                Apie Mus
            </div>

            <div class="contact_us_opening_button header_button_style" id="">
                Susisiekime
            </div>

            <div class="sort_menu_activation_button header_button_style" id="sort_menu_activation_button" onclick="sort_menu_opening_function()">
                Rinktis Maršrutą
            </div>

            <div class="sort_menu_area_closed" id="sort_menu_area">

                <div style="width: 100%" class="sorting_menu_stabilization_container">

                    <div class="sort_menu_area_separation_lines_invisible" id="sort_menu_area_separation_line_1">  
                    </div>

                    <div class="barely_minimum_sorting_parameters_area">
                        
                        <select name="Rivers" class="water_body_dropdown" id="water_body_dropdown_id">
                            <option value="*">Pasirinkite vandenį</option>
                            <option value="Nemunas">Nemunas</option>
                            <option value="Zeimena">Zeimena</option>
                            <option value="ula">Ūla</option>
                            <option value="merkys">Merkys</option>
                        </select>

                        <div class="trip_duration_checkbox_area">

                            <p class="trip_duration_checkbox_area_text">Pasirinkite trukmę:</p>
                            <div class="trip_duration_checkbox">
                                <p>1d.</p>
                                <input id="trip_duration_checkbox_1" type="checkbox" class="checkbox">
                            </div>
                            <div class="trip_duration_checkbox">
                                <p>2d.</p>
                                <input id="trip_duration_checkbox_2" type="checkbox" class="checkbox">
                            </div>
                            <div class="trip_duration_checkbox">
                                <p> &#8805 3d. </p>
                                <input id="trip_duration_checkbox_3" type="checkbox" class="checkbox">
                            </div>

                        </div>

                    </div>

                    <div class="header_button_style sleepover_sorting_parameters_activation_button" 
                            id="sleepover_sorting_parameters_activation_button"
                            onclick="sleepover_menu_opening_function()">
                        Nakvynė
                    </div>

                    <div class=sleepover_sorting_parameters_area_hidden id="sleepover_sorting_parameters_area">
                        
                        <div class="sort_menu_area_separation_lines_invisible" id="sort_menu_area_separation_line_2">
                        </div>
                        
                        <div class="sleepover_multi-checkbox_container">
                            <div class="sleepover_checkbox_area sleepover_checkbox_1_box">
                                <input type="checkbox" class="sleepover_boxing_left" name="public_camping_question" id="public_camping_question">
                                <p>Valstybinis kempingas</p>
                            </div>
                            <div class="sleepover_checkbox_area sleepover_checkbox_2_box">
                                <input type="checkbox" class="sleepover_boxing_left" name="private_camping_question" id="private_camping_question">
                                <p>Privatus kempingas</p>
                            </div>
                            <div class="sleepover_checkbox_area sleepover_checkbox_3_box">
                                <input  type="checkbox" class="sleepover_boxing_left sleepover_unique_checkbox_repositioning" name="private_camping_cost_question" id="private_camping_cost_question">
                                <p>Tinka mokamas?</p>
                            </div>
                            <div class="sleepover_checkbox_area sleepover_checkbox_4_box">
                                <input  type="checkbox" class="sleepover_boxing_left" name="bed_question" id="bed_question">
                                <p>Lova</p>
                            </div>
                            <div class="sleepover_checkbox_area sleepover_checkbox_5_box">
                                <input type="checkbox" class="sleepover_boxing_left" name="camper_question" id="camper_question">
                                <p>Pritaikyta kemperiams</p>
                            </div>
                        </div>     
                    </div>
                    
                    <div class="header_button_style parking_sorting_parameters_activation_button" 
                            id="parking_sorting_parameters_activation_button"
                            onclick="parking_menu_opening_function()">
                        Parkavimas
                    </div>

                    <div class=parking_sorting_parameters_area_hidden id="parking_sorting_parameters_area">

                        <div class="sort_menu_area_separation_lines_invisible" id="sort_menu_area_separation_line_3">
                        </div>

                        <div class="parking_multi-checkbox_container">
                                <div class="parking_checkbox_area parking_checkbox_1_box">
                                    <input type="checkbox" class="parking_boxing_left" name="leave_at_start_question" id="leave_at_start_question">
                                    <p>Palikti starte</p>
                                </div>
                                <div class="parking_checkbox_area parking_checkbox_2_box">
                                    <input type="checkbox" class="parking_boxing_left" name="leave_at_middle_question" id="leave_at_middle_question">
                                    <p>Palikti pakeliui</p>
                                </div>
                                <div class="parking_checkbox_area parking_checkbox_3_box">
                                    <input  type="checkbox" class="parking_boxing_left" name="leave_at_finish_question" id="leave_at_finish_question">
                                    <p>Palikti finiše</p>
                                </div> 
                        </div>     

                    </div>
                    <div class="header_button_style i_want_sorting_parameters_activation_button" 
                            id="i_want_sorting_parameters_activation_button"
                            onclick="i_want_menu_opening_function()">
                        Aš dar noriu...
                    </div>

                    <div class=i_want_sorting_parameters_area_hidden id="i_want_sorting_parameters_area">
                        
                        <div class="sort_menu_area_separation_lines_invisible" id="sort_menu_area_separation_line_4">
                        </div>
                        
                        <div class="i_want_multi-checkbox_container">
                            <div class="i_want_checkbox_area i_want_checkbox_1_box">
                                <input type="checkbox" class="i_want_boxing_left" name="coast_question" id="coast_question">
                                <p>Patogaus kranto</p>
                            </div>
                            <div class="i_want_checkbox_area i_want_checkbox_2_box">
                                <input  type="checkbox" class="i_want_boxing_left" name="extension_question" id="extension_question">
                                <p>Galimybės pratęsti kelionę</p>
                            </div>
                            <div class="i_want_checkbox_area i_want_checkbox_3_box">
                                <input  type="checkbox" class="i_want_boxing_left" name="sight-seing_question" id="sight_seing_question">
                                <p>Pamatyti ką nors įdomaus</p>
                            </div>
                            <div class="i_want_checkbox_area i_want_checkbox_4_box">
                                <input  type="checkbox" class="i_want_boxing_left" name="multiple_wbc_question" id="multiple_wbc_question">
                                <p>Plaukti per daug vandenų</p>
                            </div>
                            <div class="i_want_checkbox_area i_want_checkbox_5_box">
                                <input  type="checkbox" class="i_want_boxing_left" name="shop_question" id="shop_question">
                                <p>Parduotuvės šalia</p>
                            </div>
                        </div>     
                    </div>


                </div>

            </div>

        </div>

    </Header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      
    <div id="main_content_area" class="main_content_area">  Lorem ipsum dolor, sit amet consectetur 
        adipisicing elit. Distinctio a molestiae repellat labore molestias 
        quo cupiditate ut explicabo.
        <script>
     
            $(document).ready(function(){
            
                 $(".header_area").change(function(){//cia kad kai pokytis dokumente imtu visas reiksmes

                //cia susikuriam tiek kintamuju kiek bus paduodamu parametru
               var i1=" water_body_composition.wb1 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb2 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb3 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb4 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb5 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb6 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb7 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb8 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb9 LIKE '"+$('#water_body_dropdown_id').val()+"' OR"+
                    " water_body_composition.wb10 LIKE '"+$('#water_body_dropdown_id').val()+"'  ";
                //1,2,3< dienos
                    if(  $('#trip_duration_checkbox_1').is(":checked")&&
                        (!$('#trip_duration_checkbox_2').is(":checked"))&&
                        (!$('#trip_duration_checkbox_3').is(":checked")) ){
                        var i2 =" routes.time_to_complete_days= 1";
                        }else 
                    if(  $('#trip_duration_checkbox_1').is(":checked")&&
                         $('#trip_duration_checkbox_2').is(":checked")&&
                        !$('#trip_duration_checkbox_3').is(":checked") ){
                        var i2 =" routes.time_to_complete_days < 3";
                        }else 
                    if( !$('#trip_duration_checkbox_1').is(":checked")&&
                        !$('#trip_duration_checkbox_2').is(":checked")&&
                         $('#trip_duration_checkbox_3').is(":checked") ){
                        var i2 =" routes.time_to_complete_days > 2";
                        }else 
                    if(!$('#trip_duration_checkbox_1').is(":checked")&&
                        $('#trip_duration_checkbox_2').is(":checked")&&
                        $('#trip_duration_checkbox_3').is(":checked") ){
                        var i2 =" routes.time_to_complete_days>1";
                        }else 
                    if( !$('#trip_duration_checkbox_1').is(":checked")&&
                         $('#trip_duration_checkbox_2').is(":checked")&&
                        !$('#trip_duration_checkbox_3').is(":checked") ){
                        var i2 =" routes.time_to_complete_days=2";
                        }
                        else 
                    if(  $('#trip_duration_checkbox_1').is(":checked")&&
                        !$('#trip_duration_checkbox_2').is(":checked")&&
                         $('#trip_duration_checkbox_3').is(":checked") ){
                        var i2 =" routes.time_to_complete_days!=2";
                        }
                        else{
                             var i2 =" routes.time_to_complete_days!=100 ";
                        }
                        //1
                    var i3 =" sleeping.open_camping != 2" ;
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        (!$('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" sleeping.open_camping = 1";
                        }else
                        //2
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.open_camping = 1 AND sleeping.private_camping = 1 ) ";
                        }else
                        //3
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        ( $('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.open_camping = 1 AND sleeping.private_camping = 1 AND sleeping.isnt_free = 1) ";
                        }else
                        //4
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        ( $('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.open_camping = 1 AND sleeping.private_camping = 1 AND sleeping.isnt_free = 1 AND sleeping.bed = 1) ";
                        }else
                        //5
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" sleeping.private_camping = 1 ";
                        }else
                        //6
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        ( $('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.private_camping = 1  AND sleeping.isnt_free = 1) ";
                        }else
                        //7
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        ( $('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.private_camping = 1  AND sleeping.isnt_free = 1 AND sleeping.bed = 1) ";
                        }else
                        //8
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        ( $('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        ( $('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.private_camping = 1  AND sleeping.isnt_free = 1 AND sleeping.bed = 1 AND sleeping.for_campers = 1) ";
                        }else
                        //9
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        (!$('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        ( $('#camper_question').is(":checked")) ){
                        var i3 =" ( sleeping.bed = 1 AND sleeping.for_campers = 1) ";
                        }else
                        //10
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        (!$('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" sleeping.bed = 1 ";
                        }else
                        //11
                     if((!$('#public_camping_question'   ).is(":checked"))&&
                        (!$('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        ( $('#camper_question').is(":checked")) ){
                        var i3 =" sleeping.for_campers = 1 ";
                        }else
                        //12
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        ( $('#camper_question').is(":checked")) ){
                        var i3 =" (sleeping.open_camping = 1 AND sleeping.private_camping = 1  AND sleeping.bed = 1 AND sleeping.for_campers = 1) ";
                        }else
                        //13
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        (!$('#private_camping_cost_question'        ).is(":checked"))&&
                        ( $('#bed_question'  ).is(":checked"))&&
                        (!$('#camper_question').is(":checked")) ){
                        var i3 =" (sleeping.private_camping = 1 AND sleeping.open_camping = 1 AND sleeping.bed = 1) ";
                        }else
                        //14
                     if(( $('#public_camping_question'   ).is(":checked"))&&
                        ( $('#private_camping_question'  ).is(":checked"))&&
                        ( $('#private_camping_cost_question'        ).is(":checked"))&&
                        (!$('#bed_question'  ).is(":checked"))&&
                        ( $('#camper_question').is(":checked")) ){
                        var i3 =" sleeping.bed != 1  ";
                        }
                        //12,13 visi arba nieko
                        else{
                            var i3 =" sleeping.open_camping != 2";
                        }
        
                  
                    var i4 =" car_parking.l_start!=100 ";   
                    if(   $('#leave_at_start_question').is(":checked")&&
                        (!$('#leave_at_middle_question').is(":checked"))&&
                        (!$('#leave_at_finish_question').is(":checked")) ){
                        var i4 =" car_parking.l_start = 1";
                        }else 
                    if(  $('#leave_at_start_question').is(":checked")&&
                         $('#leave_at_middle_question').is(":checked")&&
                        !$('#leave_at_finish_question').is(":checked") ){
                        var i4 =" (car_parking.l_start = 1 AND car_parking.l_mid = 1) ";
                        }else 
                    if( !$('#leave_at_start_question').is(":checked")&&
                        !$('#leave_at_middle_question').is(":checked")&&
                         $('#leave_at_finish_question').is(":checked") ){
                        var i4 =" car_parking.l_end = 1 ";
                        }else 
                    if(!$('#leave_at_start_question').is(":checked")&&
                        $('#leave_at_middle_question').is(":checked")&&
                        $('#leave_at_finish_question').is(":checked") ){
                        var i4 =" (car_parking.l_mid = 1 AND car_parking.l_end = 1) ";
                        }else 
                    if( !$('#leave_at_start_question').is(":checked")&&
                         $('#leave_at_middle_question').is(":checked")&&
                        !$('#leave_at_finish_question').is(":checked") ){
                        var i4 =" car_parking.l_mid = 1 ";
                        }
                        else 
                    if(  $('#leave_at_start_question').is(":checked")&&
                        !$('#leave_at_middle_question').is(":checked")&&
                         $('#leave_at_finish_question').is(":checked") ){
                        var i4 =" (car_parking.l_start = 1 AND car_parking.l_end = 1) ";
                        }


                        
                    var i5 = "";
                    var i6 = "";
                    var i7 = "";
                    var i8 = "";  
                var i5 =" routes.coast_accessibility!=100";
                if(  $('#coast_question').is(":checked") ){
                        var i5 =" routes.coast_accessibility=1 ";
                        }
                var i6 =" routes.coast_accessibility!=10";
                if(  $('#extension_question').is(":checked") ){
                 
                var i6 =" routes.route_prolongation = 1 ";
                }
                var i7 =" routes.coast_accessibility!=1000";
                if(  $('#shop_question').is(":checked") ){
                var i7 =" shops.shop_before !=100";
                }
                var i8 =" routes.coast_accessibility!=10000";
                if(  $('#multiple_wbc_question').is(":checked") ){
                var i8 =" water_body_composition.wb2 IS NOT NULL ";
                }

                $.post('main.php', { 
                        dv1: i1, 
                        dv2: i2, 
                        dv3: i3, 
                        dv4: i4, 
                        dv5: i5, 
                        dv6: i6, 
                        dv7: i7, 
                        dv8: i8}, function(data){
                 //   alert('ajax completed. Response:  '+data);
                    return $('#main_content_area').html(data);
                });
            });
        });

        </script>
     

        <div class="main_content_area_background">
        </div>

    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="js/sort_menu_actions.js"></script>
    
</body>
</html>
