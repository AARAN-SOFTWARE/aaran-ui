
<!-- Radio Group -->
<div
    x-data="{
        value: null,
        select(option) { this.value = option },
        isSelected(option) { return this.value === option },
        hasRovingTabindex(option, el) {
            // If this is the first option element and no option has been selected, make it focusable.
            if (this.value === null && Array.from(el.parentElement.children).indexOf(el) === 0) return true

            return this.isSelected(option)
        },
        selectNext(e) {
            let el = e.target
            let siblings = Array.from(el.parentElement.children)
            let index = siblings.indexOf(el)
            let next = siblings[index === siblings.length - 1 ? 0 : index + 1]

            next.click(); next.focus();
        },
        selectPrevious(e) {
            let el = e.target
            let siblings = Array.from(el.parentElement.children)
            let index = siblings.indexOf(el)
            let previous = siblings[index === 0 ? siblings.length - 1 : index - 1]

            previous.click(); previous.focus();
        },
    }"
    @keydown.down.stop.prevent="selectNext"
    @keydown.right.stop.prevent="selectNext"
    @keydown.up.stop.prevent="selectPrevious"
    @keydown.left.stop.prevent="selectPrevious"
    role="radiogroup"
    :aria-labelledby="$id('radio-group-label')"
    x-id="['radio-group-label']"
    class="w-full"
>
    <!-- Radio Group Label -->
    <label :id="$id('radio-group-label')" role="none" class="hidden">Backend framework: <span x-text="value"></span></label>

    <div class="flex flex-row w-full justify-between">
        <!-- Option -->
        <div
            x-data="{ option: 'up' }"
            @click="select(option)"
            @keydown.enter.stop.prevent="select(option)"
            @keydown.space.stop.prevent="select(option)"
            :aria-checked="isSelected(option)"
            :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
            :aria-labelledby="$id('radio-option-label')"
            :aria-describedby="$id('radio-option-description')"
            x-id="['radio-option-label', 'radio-option-description']"
            role="radio"
            class="flex cursor-pointer rounded-md border border-gray-200 bg-white p-4 shadow w-full"
        >
            <!-- Checked Indicator -->
            <span
                :class="{ 'bg-cyan-400': isSelected(option) }"
                class="mt-1 inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full border-2 border-white ring-1 ring-gray-600"
                aria-hidden="true"
            ></span>

            <span class="ml-3">
                <!-- Primary Label -->
                <p :id="$id('radio-option-label')">Up Trend</p>
            </span>
        </div>

        <div
            x-data="{ option: 'side' }"
            @click="select(option)"
            @keydown.enter.stop.prevent="select(option)"
            @keydown.space.stop.prevent="select(option)"
            :aria-checked="isSelected(option)"
            :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
            :aria-labelledby="$id('radio-option-label')"
            :aria-describedby="$id('radio-option-description')"
            x-id="['radio-option-label', 'radio-option-description']"
            role="radio"
            class="flex cursor-pointer rounded-md border border-gray-200 bg-white p-4 shadow  w-full"
        >
            <!-- Checked Indicator -->
            <span
                :class="{ 'bg-cyan-400': isSelected(option) }"
                class="mt-1 inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full border-2 border-white ring-1 ring-gray-600"
                aria-hidden="true"
            ></span>

            <span class="ml-3">
                <!-- Primary Label -->
                <p :id="$id('radio-option-label')">Side Ways</p>

            </span>
        </div>

        <div
            x-data="{ option: 'down' }"
            @click="select(option)"
            @keydown.enter.stop.prevent="select(option)"
            @keydown.space.stop.prevent="select(option)"
            :aria-checked="isSelected(option)"
            :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
            :aria-labelledby="$id('radio-option-label')"
            :aria-describedby="$id('radio-option-description')"
            x-id="['radio-option-label', 'radio-option-description']"
            role="radio"
            class="flex cursor-pointer rounded-md border border-gray-200 bg-white p-4 shadow  w-full"
        >
            <!-- Checked Indicator -->
            <span
                :class="{ 'bg-cyan-400': isSelected(option) }"
                class="mt-1 inline-flex h-4 w-4 shrink-0 items-center justify-center rounded-full border-2 border-white ring-1 ring-gray-600"
                aria-hidden="true"
            ></span>

            <span class="ml-3">
                <!-- Primary Label -->
                <p :id="$id('radio-option-label')">Down trend</p>

            </span>
        </div>
    </div>
</div>
