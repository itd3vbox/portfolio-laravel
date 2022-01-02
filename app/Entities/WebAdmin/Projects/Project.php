<?php

namespace App\Entities\WebAdmin\Projects;

use App\Entities\Base\Projects\Project as BaseProject;

class Project extends BaseProject
{
    function __construct() 
    {
        parent::__construct();

        $this->appends = array_merge($this->appends, [
            'web_admin_url_edit',
            'web_admin_url_status_update',
            'web_admin_url_name_update',
            'web_admin_url_links_update',
            'web_admin_url_image_main_store',
        ]);       
    }

    // --- URL

    public function getWebAdminUrlEditAttribute()
    {
        return route('web-admin.projects.edit', [
            'project_id' => $this->id,
        ]);
    }

    public function getWebAdminUrlStatusUpdateAttribute()
    {
        return route('web-admin.projects.status-update', [
            'project_id' => $this->id,
        ]);
    }

    public function getWebAdminUrlNameUpdateAttribute()
    {
        return route('web-admin.projects.name-update', [
            'project_id' => $this->id,
        ]);
    }

    public function getWebAdminUrlLinksUpdateAttribute()
    {
        return route('web-admin.projects.links-update', [
            'project_id' => $this->id,
        ]);
    }

    public function getWebAdminUrlImageMainStoreAttribute()
    {
        return route('web-admin.projects.files.image-main.store', [
            'project_id' => $this->id,
        ]);
    }

    // ---

    // --- RELATIONS

    public function files()
    {
        return $this->hasMany('App\Entities\WebAdmin\Projects\File');
    }

    public function imageMain()
    {
        return $this->hasOne('App\Entities\WebAdmin\Projects\File');
    }

    // ---
}