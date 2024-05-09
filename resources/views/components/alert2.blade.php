<!--
    This is the 2/2 part of the class component created for make and show the alert 

    The $attributes var contains all the variables that the logic part provide to the view

    The method merge, lit merge the contains of a variable in $attributes with the class defined
    in to the method
-->
<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class ]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Title undefined' }}</span> {{ $slot }}
</div>