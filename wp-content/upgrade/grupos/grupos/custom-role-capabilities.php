<?php
/*
Plugin Name: Custom Role Capabilities
Description: Añadir capacidades necesarias para BuddyPress a roles personalizados.
Version: 1.0
Author: Adri y Marina
*/

function add_buddypress_caps_to_custom_roles() {
    // Obtener el rol de "Vendor" de Dokan
    $vendor_role = get_role('seller'); // Verifica el nombre correcto del rol de vendedor

    if ($vendor_role) {
        // Añadir capacidades básicas necesarias para BuddyPress
        $vendor_role->add_cap('read');
        $vendor_role->add_cap('bp_moderate');
        $vendor_role->add_cap('bp_groups_create_group');
        $vendor_role->add_cap('bp_groups_edit_group');
        $vendor_role->add_cap('bp_groups_delete_group');
        $vendor_role->add_cap('bp_groups_admin');
        $vendor_role->add_cap('bp_groups_manage_members');
        $vendor_role->add_cap('bp_groups_membership');
        $vendor_role->add_cap('bp_xprofile_change_field_visibility');
        $vendor_role->add_cap('bp_xprofile_change_field_name');
    }
}
add_action('init', 'add_buddypress_caps_to_custom_roles');
