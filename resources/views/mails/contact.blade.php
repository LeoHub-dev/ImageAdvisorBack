@component('mail::message')
# <u>Mensaje Recibido</u>

**Nombre :** 

*{{ $name }}*

**Email :**

*{{ $email }}*

**Mensaje :**

*{{ $message }}*
@endcomponent