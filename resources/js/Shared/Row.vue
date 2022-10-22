<template>
	<div class="relative my-[3vw]">
		<h2 class="leading-snug">
			<a class="inline-block min-w-[6em] mt-0 mb-[0.5em] mx-[4%] 2xl:mx-[60px] text-[1.4vw] text-neutral-200 font-bold" href="#">
				<div class="table-cell align-bottom text-[1.4vw] leading-[1.25vw]" v-text="row.title"></div>
			</a>
		</h2>
		<div class="relative group">
			<div class="px-[4%] 2xl:px-[60px]">
				<div class="flex overflow-visible scroll-smooth">
					<div v-for="item in row.medias" v-bind:key="item.title" class="flex-none w-1/2 md:w-1/4 lg:w-1/5 xl:w-1/6 px-[0.2vw] first:pl-0">
						<a href="#">
							<div class="h-full relative overflow-hidden rounded-[0.2vw]">
								<img class="h-full w-full" :src="'https://image.tmdb.org/t/p/original' + item.background_path">
							</div>
						</a>
					</div>
				</div>
				<span class="flex justify-center absolute top-0 right-0 bottom-0 w-[4%] 2xl:w-[60px] bg-neutral-900/50 hover:bg-neutral-900/[70%] text-white rounded-l-[4px] cursor-pointer [&>*]:hover:scale-125">
					<b class="hidden group-hover:flex font-['nf-icon'] font-normal text-[2.5vw] self-center transition ease-out delay-[0ms] hover:font-bold before:content-['\e867']"></b>
				</span>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	layout: null,
	props: {
		row: {
			type: Object,
			required: true
		}
	},
}
</script>