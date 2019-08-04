new Vue({
  el: '#app',
  data: function() {
    return { visible: false }
  },
  data() {
    return {
      activeName: 'fourth',
      activeIndex2: '1',
      items1: [
        { variantId: 1,
          variantImage: 'images/jiyugaoka/bridge.jpg' },
        { variantId: 2,
          variantImage: 'images/jiyugaoka/para.jpg' },
        { variantId: 3,
          variantImage: 'images/jiyugaoka/tapi2.jpg' },
        { variantId: 4,
          variantImage: 'images/jiyugaoka/hey.jpg' }
      ],
      items2: [
        { variantId: 1,
          variantImage: 'images/disney/syugo.jpg' },
        { variantId: 2,
          variantImage: 'images/disney/show.jpg' },
        { variantId: 3,
          variantImage: 'images/disney/minato.jpg' },
        { variantId: 4,
          variantImage: 'images/disney/syugo2.jpg' }
      ],
      items3: [
        { variantId: 1,
          variantImage: 'images/haro/haro.jpg' },
        { variantId: 2,
          variantImage: 'images/haro/cheese.jpg' },
        { variantId: 3,
          variantImage: 'images/haro/ayana.jpg' }
      ],
      items4: [
        { variantId: 1,
          variantImage: 'images/taiwan/rantan.jpg' },
        { variantId: 2,
          variantImage: 'images/taiwan/cafe2.jpg' },
        { variantId: 3,
          variantImage: 'images/taiwan/meshi.jpg' },
        { variantId: 4,
          variantImage: 'images/taiwan/cafe.jpg' },
        { variantId: 5,
          variantImage: 'images/taiwan/rantan2.jpg' }
      ],
      items5: [
        { variantId: 1,
          variantImage: 'images/taiwan2/lake2.jpg' },
        { variantId: 2,
          variantImage: 'images/taiwan2/art.jpg' },
        { variantId: 3,
          variantImage: 'images/taiwan2/tapi.jpg' },
        { variantId: 4,
          variantImage: 'images/taiwan2/lake1.jpg' },
        { variantId: 5,
          variantImage: 'images/taiwan2/ice.jpg' }
      ],
      ruleForm: {
        name: '',
        sex: '',
        kind: '',
        time: '',
        email: '',
        number: '',
        number2: '',
        address: '',
        delivery: false,
        type: [],
        time: '',
        question: ''
      },
      rules: {
        name: [
          { required: true, message: '氏名を記述してください', trigger: 'blur' },
          { min: 3, max: 50, message: '正しく記述してください', trigger: 'blur' }
        ],
        sex: [
          { required: true, message: '性別を選択してください', trigger: 'change' }
        ],
        kind: [
          { required: true, message: 'ご用件を選択してください', trigger: 'change' }
        ],
        email: [
          { type: 'email', required: true, message: 'Emailを入力してください。', trigger: 'blur' }
        ]
      }
    };
  },
  computed: {
    username () {
      return this.$route.params.username
    },
    image(){
      return this.variants[this.selectedVriant].variantImage
    }
  },
  methods: {
    submitForm(formName) {
      this.$refs[formName].validate((valid) => {
        if (valid) {
          alert('送信されました');
          this.$refs[formName].resetFields();
        } else {
          alert('必須項目を正しく記入してください');
          return false;
        }
      });
    },
    handleClick(tab, event) {
      console.log(tab, event);
    }
  }
}).$mount('#app')

