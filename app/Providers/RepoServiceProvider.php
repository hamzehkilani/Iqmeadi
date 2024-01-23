<?php

namespace App\Providers;

use App\IRepository\FooterInter;
use App\IRepository\InfoCompanyInterface;
use App\Repository\InfoComapny;
use App\IRepository\FooterInterface;
use App\Repository\FooterRepo;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(
            InfoCompanyInterface::class,
            InfoComapny::class
        );

        $this->app->bind(
            FooterInter::class,
            FooterRepo::class
        );

    }
}