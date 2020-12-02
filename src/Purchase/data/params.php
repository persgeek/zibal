<?php

return json_encode([

    /**
     * Documentation for this.
     */
    'merchant' => config('zibal.merchant'),

    /**
     * Documentation for this.
     */
    'amount' => $this->entity->getAmount(),

    /**
     * Documentation for this.
     */
    'callbackUrl' => $this->entity->getBack(),
]);
