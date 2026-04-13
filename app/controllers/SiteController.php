<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Request;
use App\Models\Page;
use App\Services\AuthSession;

class SiteController extends Controller
{
    private AuthSession $authSession;
    private Page $page;

    public function __construct()
    {
        $this->authSession = new AuthSession();
        $this->page = new Page();
    }

    public function home(Request $request): void
    {
        $this->render('home', [
            'username' => $this->authSession->username(),
            'role'     => $this->authSession->role(),
            'pages'    => $this->page->getPublishedPages(),
        ]);
    }

    public function designGuide(Request $request): void
    {
        $this->render('design-guide', [
            'username' => $this->authSession->username(),
            'role'     => $this->authSession->role(),
        ]);
    }
}
