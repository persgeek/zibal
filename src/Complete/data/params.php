<?php

return json_encode([

    /**
     * Documentation for this.
     */
    'merchant' => config('zibal.merchant'),

    /**
     * Documentation for this.
     */
    'trackId' => $this->entity->getTrack(),
]);
