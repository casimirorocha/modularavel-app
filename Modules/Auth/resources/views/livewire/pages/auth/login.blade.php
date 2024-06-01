<div>
    <div class="max-w-[400px]">
        <q-form
                @submit="onSubmit"
                @reset="onReset"
                class="q-gutter-md"
        >
            <q-input
                    filled
                    label="Your name *"
                    hint="Name and surname"
                    lazy-rules
                    stack-label
            ></q-input>

            <q-input
                    filled
                    type="number"
                    v-model="age"
                    label="Your age *"
                    lazy-rules
                    :rules="[
                      val => val !== null && val !== '' || 'Please type your age',
                      val => val > 0 && val < 100 || 'Please type a real age'
                    ]"
            ></q-input>

            <q-toggle v-model="accept" label="I accept the license and terms"></q-toggle>

            <div>
                <q-btn label="Submit" type="submit" color="primary"></q-btn>
                <q-btn label="Reset" type="reset" color="primary" flat class="q-ml-sm"></q-btn>
            </div>
        </q-form>
    </div>
</div>

@script
<script>
    Alpine.data('counter', () => {
        return {
            email: '',
            increment() {
                this.count++
            },
        }
    })
</script>
@endscript