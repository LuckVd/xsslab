该项目配合https://luckvd.github.io/2023/07/03/xss原理与检测/一文使用

根据注入点的不同，有如下分类
其中case1和case2是普通tag的contents
case3和case4是可执行tag中无包裹的contents
case15和case17是可执行tag中有包裹的contents
case5和case6是普通属性(非on、src、href等)
case9和case14是on、src、href等属性
