"use strict";

function sort_menu_opening_function() {
    sort_menu_activation_button.classList.toggle("sort_menu_activation_button");
    sort_menu_activation_button.classList.toggle("sort_menu_activation_button_opened");
    sort_menu_area.classList.toggle("sort_menu_area_closed");
    sort_menu_area.classList.toggle("sort_menu_area_opened");
    sort_menu_area_separation_line_1.classList.toggle("sort_menu_area_separation_lines_invisible");
    sort_menu_area_separation_line_1.classList.toggle("sort_menu_area_separation_lines_visible");
}

function sleepover_menu_opening_function() {
    sleepover_sorting_parameters_activation_button.classList.toggle("sleepover_sorting_parameters_activation_button");
    sleepover_sorting_parameters_activation_button.classList.toggle("sleepover_sorting_parameters_activation_button_opened");
    sleepover_sorting_parameters_area.classList.toggle("sleepover_sorting_parameters_area_hidden");
    sleepover_sorting_parameters_area.classList.toggle("sleepover_sorting_parameters_area_active");
    sort_menu_area_separation_line_2.classList.toggle("sort_menu_area_separation_lines_invisible");
    sort_menu_area_separation_line_2.classList.toggle("sort_menu_area_separation_lines_visible");

}

// function sleepover_slider_movement_function() {
//     sleepover_slider.classList.toggle("active");
//     sleepover_slider.classList.toggle("inactive");
//     sleepover_sorting_parameters_inner_area.classList.toggle("inactive_inner");
//     sleepover_sorting_parameters_inner_area.classList.toggle("active_inner");

    
    
// }
