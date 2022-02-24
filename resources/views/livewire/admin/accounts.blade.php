<div x-data="{action:'none'}"
    x-on:notify.window="action = event.detail.nextAction"
    x-on:start-editing.window="action='editing'">
    <div x-data="{alert:false}"
        x-on:notify.window="alert=true;
        document.querySelector('#type').innerHTML = event.detail.type;
        document.querySelector('#message').innerHTML=event.detail.message;
        setTimeout(function(){
            alert=false;
        },2000);">
        <div x-cloak
            x-show="alert">
            <div class="flex justify-between p-3 mb-2 text-white bg-green-500 shadow-inner">
                <p class="self-center">
                    <strong class="uppercase"
                        id="type"></strong> <span id="message"></span>
                </p>
            </div>
        </div>
    </div>

    <div x-show="action=='none'">
        @include('admin-pages.components.adviser.account-list')
    </div>
    <div x-cloak
        x-show="action=='create-account'">
        @include('admin-pages.components.adviser.create-account')
    </div>
    <div x-cloak
        x-show="action=='editing'">
        @include('admin-pages.components.adviser.edit-account')
    </div>
</div>
