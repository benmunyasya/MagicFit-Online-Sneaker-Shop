<script setup lang="ts">
import {useCartStore} from '../../store/cartStore';
import useDropdownStore from '../../store/dropdownStore.js';

const cartStore = useCartStore();
const dropDownStore = useDropdownStore();
</script>
<template>
      <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close" @click="dropDownStore.toggleDropdown">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="cart-body">
                <ul class="cart-item-list">
                    <li
                        class="cart-item"
                        v-if="cartStore.items.length"
                        v-for="(item, index) in cartStore.items"
                        :key="index"
                    >
                        <div class="item-img">
                            <a href=""
                                > <img loading="lazy" :src="'/storage' + item.productColor.productImages[1].url" alt="Image"></a>
                            <button
                                class="close-btn"
                                @click.prevent="cartStore.removeItem(item)"
                               >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="item-content">
                            <span><span class="color" :style="{ backgroundColor: item.productColor.color_code}"></span></span>
                            <h3 class="item-title">


                                    {{
                                    item.name
                                }}
                            </h3>
                            <div class="item-price">
                                <span class="currency-symbol">KSH  </span
                                >   {{ item.productColor.price }}   ({{ item.productColor.color_name}})
                            </div>
                            <div class="pro-qty item-quantity"><span class="dec qtybtn" @click.prevent="cartStore.decreaseItem(item)" >-</span>
                                <input type="number" class="quantity-input"      v-model="item.count">
                            <span class="inc qtybtn"  @click.prevent="cartStore.increaseItem(item)">+</span></div>

                        </div>
                    </li>
                    <h6 v-else>You havent added any items in your cart yet</h6>
                </ul>
            </div>
            <div class="cart-footer"  v-if="cartStore.items.length > 0 ">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">{{cartStore.totalCost}}</span>
                </h3>
                <div class="group-btn" >
                     <router-link to="/cart">
                        <a @click="dropDownStore.toggleDropdown" class="axil-btn btn-bg-primary viewcart-btn"
                            >View Cart</a
                        ></router-link
                    >
         <router-link to="/checkout"> <a  @click="dropDownStore.toggleDropdown"

                       class="axil-btn btn-bg-secondary checkout-btn"
                       >Checkout</a
                   ></router-link>

                </div>
            </div>
        </div>
</template>
