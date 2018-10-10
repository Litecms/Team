<?php

namespace Litecms\Team\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class TeamPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TeamTransformer();
    }
}