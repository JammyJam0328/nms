<div x-data="{action:'none'}"
    x-on:notify.window="action=event.detail.action"
    x-on:start-editing.window="action = 'edit'"
    x-on:end-editing.window="action = 'none'">
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
        @include('adviser-pages.components.manage-section.section-list')
    </div>
    <div x-cloak
        x-show="action=='create'">
        @include('adviser-pages.components.manage-section.create-section')
    </div>
    <div x-cloak
        x-show="action=='edit'">
        @include('adviser-pages.components.manage-section.edit-section')
    </div>
</div>
