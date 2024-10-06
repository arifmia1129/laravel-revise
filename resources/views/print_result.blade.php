@if ($marks >= 80) 
    <p style="color: green;">Passed: A+</p>
    
@elseif ($marks >= 70)
     <p style="color: green;">Passed: A</p>

@elseif ($marks >= 60)
    <p style="color: green;">Passed: B</p>
    
@elseif ($marks >= 50)
    <p style="color: green;">Passed: C</p>
    
@else
    <p style="color: red;">Failed</p>
    
@endif