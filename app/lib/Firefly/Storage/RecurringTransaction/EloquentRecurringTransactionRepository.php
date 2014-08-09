<?php


namespace Firefly\Storage\RecurringTransaction;

use Carbon\Carbon;

class EloquentRecurringTransactionRepository implements RecurringTransactionRepositoryInterface
{
    public function destroy(\RecurringTransaction $recurringTransaction) {
        $recurringTransaction->delete();
        return true;
    }

    public function get()
    {
        return \Auth::user()->recurringtransactions()->get();
    }

    public function store($data)
    {
        $recurringTransaction = new \RecurringTransaction;
        $recurringTransaction->user()->associate(\Auth::user());
        $recurringTransaction->name = $data['name'];
        $recurringTransaction->match = join(' ', explode(',', $data['match']));
        $recurringTransaction->amount_max = floatval($data['amount_max']);
        $recurringTransaction->amount_min = floatval($data['amount_min']);

        // both amounts zero:
        if($recurringTransaction->amount_max == 0 && $recurringTransaction->amount_min == 0) {
            $recurringTransaction->errors()->add('amount_max','Amount max and min cannot both be zero.');
            return $recurringTransaction;
        }

        $recurringTransaction->date = new Carbon($data['date']);
        $recurringTransaction->active = isset($data['active']) ? intval($data['active']) : 0;
        $recurringTransaction->automatch = isset($data['automatch']) ? intval($data['automatch']) : 0;
        $recurringTransaction->skip = isset($data['skip']) ? intval($data['skip']) : 0;
        $recurringTransaction->repeat_freq = $data['repeat_freq'];

        if($recurringTransaction->validate()) {
            $recurringTransaction->save();
        }
        return $recurringTransaction;
    }

}