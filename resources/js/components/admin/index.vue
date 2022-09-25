<template>
  <div>
    <MainHeader></MainHeader>
    <MainSidebar></MainSidebar>

    <router-view></router-view>

    <MainFooter></MainFooter>
  </div>
</template>
<script>
	import MainHeader       from './main-header.vue'
    import MainSidebar      from './main-sidebar.vue'
    import MainFooter       from './main-footer.vue'

	export default {
		components: {
            MainHeader,
            MainSidebar,
            MainFooter,
        }
	}
</script>