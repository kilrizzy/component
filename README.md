# Component
Laravel component helper provide common html objects

#Usage

```
{{ 
Component::actionButton([
	''
]) 
}}
```

Which results in

```
<li class="active"><a href="{{ url('customer') }}">Customers</a></li>
```