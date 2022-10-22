<template>
	<div class="h-full min-h-screen w-full">
        <Billboard />
		<template v-for="row in rows" :key="row.title">
			<Row :row="row"/>
		</template>
    </div>
</template>



<script>
import axios from 'axios';
import { ref } from 'vue'
import Billboard from '../../Shared/Billboard';
import Row from '../../Shared/Row';

export default {
	components: {
		Billboard,
		Row
	},
	props: {
		requests: {
			type: Array,
			default: [
				'/popular-movies',
				'/popular-shows'
			]
		},
	},
	methods: {
		makeRowRequests: async function(requests) {
			for (const request of requests) {
				let row = (await axios.get(request)).data;

				this.rows.push(row);

				await new Promise(resolve => setTimeout(resolve, 2000));
			}
		}
	},
	setup() {
		let rows = ref([]);

		return { rows }
	},
	mounted() {
		this.makeRowRequests(this.requests);
	}
}
</script>

<script setup>
import { ref } from 'vue'

let rows = ref([]);
</script>