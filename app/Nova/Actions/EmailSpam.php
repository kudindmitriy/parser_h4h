<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;

use Sloveniangooner\SearchableSelect\SearchableSelect;


class EmailSpam extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {


        return Action::message('It worked!');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
           SearchableSelect::make("Mail", "mail_id")->resource(\App\Nova\Mail::class)
        ];
    }
}

/*
https://sendpulse.ua/
https://mailchimp.com/
https://www.getresponse.ru/
https://www.sendinblue.com/

https://www.wpbeginner.com/showcase/best-email-marketing-services/
*/
