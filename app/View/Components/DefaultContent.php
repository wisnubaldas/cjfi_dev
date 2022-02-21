<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DefaultContent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <!-- begin vertical-box -->
        <div class="vertical-box">
            <!-- begin vertical-box-column -->
            <div class="vertical-box-column">
                <!-- begin vertical-box -->
                <div class="vertical-box">
                    <!-- begin vertical-box-row -->
                    <div class="vertical-box-row">
                        <!-- begin vertical-box-cell -->
                        <div class="vertical-box-cell">
                            <!-- begin vertical-box-inner-cell -->
                            <div class="vertical-box-inner-cell">
                                <!-- begin scrollbar -->
                                <div data-scrollbar="true" data-height="100%" class="wrapper">
                                    {{ $slot }}
                                </div>
                                <!-- end scrollbar -->
                            </div>
                            <!-- end vertical-box-inner-cell -->
                        </div>
                        <!-- end vertical-box-cell -->
                    </div>
                    <!-- end vertical-box-row -->
                </div>
                <!-- end vertical-box -->
            </div>
            <!-- end vertical-box-column -->
        </div>
        <!-- end vertical-box -->
        blade;
    }
}
