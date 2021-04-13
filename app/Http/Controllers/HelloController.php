<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        global $zipkinTracer;
        if ($zipkinTracer) {
            /** @var Span $span */
            $span = $zipkinTracer->getActiveSpan();
            
            $span->setAttribute('foo', 'bar');
            $span->updateName('New name');
    
            $zipkinTracer->startAndActivateSpan('Child span');
            try {
                throw new \Exception('Exception Example');
            } catch (\Exception $exception) {
                $span->setSpanStatus($exception->getCode(), $exception->getMessage());
            }
            $zipkinTracer->endActiveSpan();
        }
        return "hello";
    }
}
