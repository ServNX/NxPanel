export default {
  methods: {
    onClick (item) {
      item.onClick ? item.onClick() : null;
    },
  }
};