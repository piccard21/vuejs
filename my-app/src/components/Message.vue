<template>
  <div class="box is-info">
  <p>
   <slot></slot>
   </p>
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
    }
  }
}
</script>

<style>
.box {
	background: grey;
	padding: 10px;
	border: 1px solid #c5c5c5;
	margin-bottom: 10px;
}
</style>
