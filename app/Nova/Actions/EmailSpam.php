<?php

namespace App\Nova\Actions;

use App\Mail\SendSpam;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

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
        foreach ($models as $model) {
            Mail::to( $model->email )->send(new SendSpam());

            if ( Mail::failures() ) {
                return Action::danger('Messages not sent, something went wrong!');
            }
        }

        return Action::message('Messages sent successfully!');
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
