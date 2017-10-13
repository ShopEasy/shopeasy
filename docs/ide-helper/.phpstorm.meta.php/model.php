<?php
/**
 * Created by IntelliJ IDEA.
 * User: Starwind
 * Date: 2017/10/12
 * Time: 下午1:47
 */

namespace PHPSTORM_META {                                // we want to avoid the pollution

    // this is saner and self-documented format for 2016.2 and NEWER
    //Try QuickDoc on these "magic" functions, or even Go to definition!

    override(\Model(0),         // method signature //argument number is ALWAYS 0 now.
        map([ //map of argument value -> return type
              "" => "@Model",                //Reference target classes by ::class constant
              //non mapped value, e.g. $getByClassNameConst case above will be returned automatically
        ]));

    //pattern example. `@` is replaced by argument literal value. //TODO: more advanced patterns.
    override(\model(0), map([
        '' => '@Model',
    ]));

    override(\Logic(0), map([
        '' => '@Logic',
    ]));
    override(\logic(0), map([
        '' => '@Logic',
    ]));


    //basicaly the same as get, just for array["arg"] lookups
    //    override( new \ServiceLocatorInterface, map( [
    //            "special" => \Exception::class,
    //        ] ) );
}